<?php

namespace XeroHatch\Application;

use XeroHatch\Application;
use XeroHatch\Remote\OAuth\Client;

class PublicApplication extends Application
{
    protected static $_type_config_defaults = [
        'oauth' => [
            'signature_method' => Client::SIGNATURE_HMAC_SHA1,
        ],
    ];
}
