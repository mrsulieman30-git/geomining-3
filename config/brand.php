<?php

return [
    'name' => env('APP_NAME', 'AURUM'),

    'logos' => [
        'light' => '/images/logo-light.svg',
        'dark' => '/images/logo-dark.svg',
        'monochrome' => '/images/logo-mono.svg',
        'favicon' => '/favicon.ico',
    ],

    'contacts' => [
        'general_email' => 'hello@example.com',
        'support_email' => 'support@example.com',
        'phone' => '+1234567890',
    ],

    'currencies' => [
        'default' => 'USD',
        'supported' => ['USD', 'EUR', 'SOS', 'AED'],
    ],

    'timezone' => [
        'default' => 'Africa/Mogadishu',
    ],

    'locales' => [
        'default' => 'en',
        'supported' => ['en', 'ar', 'so'],
    ],
];
