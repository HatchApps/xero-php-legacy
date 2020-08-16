<?php

namespace XeroHatch\tests\Application;

use XeroHatch\Application\PartnerApplication;

class PartnerApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testNewInstance()
    {
        $config = [
            'oauth' => [
                'callback' => 'http://localhost/',
                'consumer_key' => 'k',
                'consumer_secret' => 's',
                'rsa_private_key' => 'file://certs/privatekey.pem',
                //'signature_location'  => \XeroHatch\Remote\OAuth\Client::SIGN_LOCATION_QUERY
            ],
            'curl' => [
                CURLOPT_CAINFO => 'certs/ca-bundle.crt',
            ],
        ];

        new PartnerApplication($config);
    }
}
