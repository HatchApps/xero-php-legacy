<?php

namespace XeroHatch\Remote\OAuth\SignatureMethod;

class PLAINTEXT implements SignatureMethodInterface
{
    public static function generateSignature(array $config, $sbs, $secret)
    {
        return urlencode($secret);
    }
}
