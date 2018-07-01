<?php

return [
    'default_connetion' => 'default',

    'connections' => [
        'default' => [
            'base_uri'       => env('HTTP_BASE_URI', 'localhost'),
            'timeout'        => env('HTTP_TIMEOUT', 0),
            'allow_redirect' => env('HTTP_ALLOW_REDIRECT', false),
            'proxy'          => env('HTTP_PROXY', ''),
        ]
    ]
];
