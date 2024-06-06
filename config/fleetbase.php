<?php

/**
 * -------------------------------------------
 * Fleetbase Core API Configuration
 * -------------------------------------------
 */
return [
    'api' => [
        'version' => '1.0.0',
        'routing' => [
            'prefix' => env('API_PREFIX'),
            'internal_prefix' => env('INTERNAL_API_PREFIX', 'int')
        ]
    ],
    'console' => [
        'host' => env('CONSOLE_HOST', 'fleetbase.eastus.cloudapp.azure.com'),
        'subdomain' => env('CONSOLE_SUBDOMAIN'),
        'secure' => env('CONSOLE_SECURE', !app()->environment(['development', 'local']))
    ],
    'services' => [
        'ipinfo' => [
            'api_key' => env('IPINFO_API_KEY')
        ]
    ],
    'connection' => [
        'db' => env('DB_CONNECTION', 'mysql'),
        'sandbox' => env('SANDBOX_DB_CONNECTION', 'sandbox')
    ],
    /*'branding' => [
        'logo_url' => 'https://flb-assets.s3.ap-southeast-1.amazonaws.com/static/fleetbase-logo.png',
        //'logo_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/73x73%20R.png',
        //'logo_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/carvachLogo-final.png',
        //'icon_url' => 'https://flb-assets.s3.ap-southeast-1.amazonaws.com/static/fleetbase-icon.png'
        'icon_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/144x144%20R.png'
        //'icon_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/final%20full%20logo.png'
    ]*/

    'branding' => [
        //'logo_url' => 'https://www.carvach.com/carvachLogo.svg',
        //'icon_url' => 'https://www.carvach.com/carvachLogo.svg'

        'logo_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/final%20full%20logo2.png',
        'icon_url' => 'https://raw.githubusercontent.com/Rohit0814/test/main/final%20full%20logo2.png'
    ]
];
