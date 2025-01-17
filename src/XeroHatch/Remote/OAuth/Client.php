<?php

namespace XeroHatch\Remote\OAuth;

use XeroHatch\Helpers;
use XeroHatch\Remote\Request;
use XeroHatch\Remote\OAuth\SignatureMethod\RSASHA1;
use XeroHatch\Remote\OAuth\SignatureMethod\HMACSHA1;
use XeroHatch\Remote\OAuth\SignatureMethod\PLAINTEXT;

/**
 * This is a class to manage a client OAuth session with the Xero APIs.
 * It's loosely based on the functionality of the SimpleOAuth class,
 * which comes in the recommended php developer kit.
 *
 * @author Michael Calcinai
 */
class Client
{
    //Supported hashing mechanisms
    const SIGNATURE_RSA_SHA1 = 'RSA-SHA1';

    const SIGNATURE_HMAC_SHA1 = 'HMAC-SHA1';

    const SIGNATURE_PLAINTEXT = 'PLAINTEXT';

    const OAUTH_VERSION = '1.0';

    const SIGN_LOCATION_HEADER = 'header';

    const SIGN_LOCATION_QUERY = 'query_string';

    private $config;

    // "Cached" parameters - will change between signings.
    private $oauth_params;

    private $token_secret;

    private $verifier;

    /**
     * @param array $config OAuth config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * This actually signs the request.
     * It can be called multiple times (for different requests) on the same instance
     * of the client.
     * This method puts it in the oauth params in the Authorization header by default.
     *
     * @param Request $request Request to sign
     *
     * @throws Exception
     */
    public function sign(Request $request)
    {
        $oauth_params = $this->getOAuthParams();
        $oauth_params['oauth_signature'] = $this->getSignature($request);

        //put it where it needs to go in the request
        switch ($this->config['signature_location']) {
            case self::SIGN_LOCATION_HEADER:
                //Needs escaping in the header, not in the QS
                $oauth_params['oauth_signature'] = Helpers::escape($oauth_params['oauth_signature']);

                $header = 'OAuth '.Helpers::flattenAssocArray($oauth_params, '%s="%s"', ', ');
                $request->setHeader(Request::HEADER_AUTHORIZATION, $header);

                break;

            case self::SIGN_LOCATION_QUERY:
                foreach ($oauth_params as $param_name => $param_value) {
                    $request->setParameter($param_name, $param_value);
                }

                break;

            default:
                throw new Exception('Invalid signing location specified.');
        }

        //Reset so this instance of the Client can sign subsequent requests.
        //Mainly for the nonce.
        $this->resetOAuthParams();
    }

    /**
     * Resets the instance for subsequent signing requests.
     */
    private function resetOAuthParams()
    {
        $this->oauth_params = null;
    }

    /**
     * Gets the skeleton Oauth parameter array.
     * The only one missing is the actual oauth_signature, which should get
     * populated from this data and then merged into it.
     *
     * @return array
     */
    private function getOAuthParams()
    {
        //this needs to be stateful until the request is signed, then it gets unset
        if (! isset($this->oauth_params)) {
            $this->oauth_params = [
                'oauth_consumer_key' => $this->getConsumerKey(),
                'oauth_signature_method' => $this->getSignatureMethod(),
                'oauth_timestamp' => $this->getTimestamp(),
                'oauth_nonce' => $this->getNonce(),
                'oauth_callback' => $this->getCallback(),
                'oauth_version' => self::OAUTH_VERSION,
            ];

            if (null !== $token = $this->getToken()) {
                $this->oauth_params['oauth_token'] = $token;
            }
            if (null !== $verifier = $this->getVerifier()) {
                $this->oauth_params['oauth_verifier'] = $verifier;
            }
        }

        return $this->oauth_params;
    }

    /**
     * Call the appropriate signature method's signing function.
     * Not all mechanisms use all of the parameters, but for
     * consistency, pass the same constructor to each one.
     *
     * @param Request $request
     *
     * @throws Exception
     *
     * @return string
     */
    private function getSignature(Request $request)
    {
        switch ($this->getSignatureMethod()) {
            case self::SIGNATURE_RSA_SHA1:
                $signature = RSASHA1::generateSignature(
                    $this->config,
                    $this->getSBS($request),
                    $this->getSigningSecret()
                );

                break;
            case self::SIGNATURE_HMAC_SHA1:
                $signature = HMACSHA1::generateSignature(
                    $this->config,
                    $this->getSBS($request),
                    $this->getSigningSecret()
                );

                break;
            case self::SIGNATURE_PLAINTEXT:
                $signature = PLAINTEXT::generateSignature(
                    $this->config,
                    $this->getSBS($request),
                    $this->getSigningSecret()
                );

                break;
            default:
                throw new Exception(
                    "Invalid signature method [{$this->config['signature_method']}]"
                );
        }

        return $signature;
    }

    /**
     * Get the Signature Base String for signing.
     * This is basically just all params (including the generated oauth ones)
     * ordered by key, then concatenated with the method and URL
     * GET&https%3A%2F%2Fapi.xero.com%2Fapi.xro%2F2.0%2FContacts&oauth_consumer etc.
     *
     * @param Request $request
     *
     * @return string
     */
    public function getSBS(Request $request)
    {
        $oauth_params = $this->getOAuthParams();

        $sbs_params = array_merge($request->getParameters(), $oauth_params);
        //Params need sorting so signing order is the same
        ksort($sbs_params);
        $sbs_string = Helpers::flattenAssocArray($sbs_params, '%s=%s', '&', true);

        $url = $request->getUrl()->getFullURL();

        //Every second thing seems to need escaping!
        return sprintf(
            '%s&%s&%s',
            $request->getMethod(),
            Helpers::escape($url),
            Helpers::escape($sbs_string)
        );
    }

    /**
     * This is the signing secret passed to HMAC and PLAINTEXT signing mechanisms.
     *
     * @return string
     */
    private function getSigningSecret()
    {
        $secret = $this->getConsumerSecret().'&';

        if (null !== $token_secret = $this->getTokenSecret()) {
            $secret .= $token_secret;
        }

        return $secret;
    }

    /**
     * This snippet was taken from implementations of the laravel/framework
     * \Illuminate\Suppport\Str::random() method.
     *
     * @return string
     */
    private function getNonce()
    {
        $length = 20;
        $nonce = '';

        while (($len = strlen($nonce)) < $length) {
            $size = $length - $len;

            // this does not have to be cryptograpically secure, it just needs
            // to to be random enough to not hit duplicate values, but it
            // doesn't hurt to utilise `random_bytes` if it is available.
            if (PHP_MAJOR_VERSION >= 7) {
                $bytes = random_bytes($size);
            } else {
                $bytes = openssl_random_pseudo_bytes($size);

                if ($bytes === false) {
                    throw new Exception('Unable to generate random bytes for the nonce');
                }
            }

            $nonce .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $nonce;
    }

    /**
     * @return int
     */
    private function getTimestamp()
    {
        return time();
    }

    public function setToken($token)
    {
        $this->config['token'] = $token;

        return $this;
    }

    public function getToken()
    {
        if (isset($this->config['token'])) {
            return $this->config['token'];
        }

        
    }

    /**
     * @return string
     */
    private function getConsumerKey()
    {
        return $this->config['consumer_key'];
    }

    /**
     * @return string
     */
    private function getConsumerSecret()
    {
        return $this->config['consumer_secret'];
    }

    /**
     * @return string
     */
    private function getCallback()
    {
        return $this->config['callback'];
    }

    /**
     * @return string
     */
    private function getSignatureMethod()
    {
        return $this->config['signature_method'];
    }

    /**
     * @param string|null $oauth_token
     *
     * @return string
     */
    public function getAuthorizeURL($oauth_token = null)
    {
        if ($oauth_token === null) {
            return $this->config['authorize_url'];
        }

        return $this->appendUrlQuery(
            $this->config['authorize_url'],
            compact('oauth_token')
        );
    }

    /**
     * Prepend URL with query string.
     *
     * @param string $url
     * @param array $query
     *
     * @return string
     */
    protected function appendUrlQuery($url, $query)
    {
        $glue = $this->urlHasQuery($url) ? '&' : '?';

        return $url.$glue.http_build_query($query);
    }

    /**
     * Determine if the URL has a query string.
     *
     * @param string $url
     *
     * @return bool
     */
    protected function urlHasQuery($url)
    {
        return (bool) parse_url($url, PHP_URL_QUERY);
    }

    //Populated during 3-legged auth
    public function setTokenSecret($secret)
    {
        $this->token_secret = $secret;

        return $this;
    }

    public function getTokenSecret()
    {
        if (isset($this->token_secret)) {
            return $this->token_secret;
        }

        
    }

    public function setVerifier($verifier)
    {
        $this->verifier = $verifier;

        return $this;
    }

    public function getVerifier()
    {
        if (isset($this->verifier)) {
            return $this->verifier;
        }

        
    }
}
