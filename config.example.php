<?php
return [
    'db' => [
        'host' => '127.0.0.1',
        'name' => 'url_safety_checker',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8mb4',
    ],
    'apis' => [
        'google_safe_browsing_key' => '',
        'virustotal_key' => '',
        'urlscan_key' => '',
    ],
    'app' => [
        'max_url_length' => 2048,
        'request_timeout' => 8,
        'cache_minutes' => 30,
    ],
];
