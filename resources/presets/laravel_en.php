<?php

return [
    'APP_NAME' => [
        'description' => 'Application Name',
    ],
    'APP_ENV' => [
        'description' => 'Application Environment (production/testing/local)',
    ],
    'APP_KEY' => [
        'description' => 'Application Key',
    ],
    'APP_DEBUG' => [
        'description' => 'Debug Mode (true/false)'
    ],
    'APP_PORT'  => [
        'description' => 'Application HTTP Port',
    ],
    'APP_URL'   => [
        'description' => 'APP HTTP Url',
    ],
    'LOG_CHANNEL' => [
        'description' => 'Default Log Channel',
    ],
    'DB_CONNECTION' => [
        'description' => 'Database Connection (pgsql/mysql/sqlite)',
    ],
    'DB_HOST' => [
        'description' => 'Database Host',
    ],
    'DB_PORT' => [
        'description' => 'Database Port',
    ],
    'DB_DATABASE' => [
        'description' => 'Database Name',
    ],
    'DB_USERNAME' => [
        'description' => 'Database User',
    ],
    'DB_PASSWORD' => [
        'description' => 'Database User\'s Password',
    ],
    'SESSION_DRIVER' => [
        'description' => 'HTTP Session Driver',
    ],
    'SESSION_LIFETIME' => [
        'description' => 'HTTP Session Lifetime',
    ],
    'REDIS_HOST' => [
        'description' => 'Redis Host',
    ],
    'REDIS_PASSWORD' => [
        'description' => 'Redis Password',
    ],
    'REDIS_PORT' => [
        'description' => 'Redis Port',
    ],
    'REDIS_URL' => [
        'description' => 'Redis URL',
    ],
    'REDIS_CLIENT' => [
        'description' => 'Redis Client',
        'default_value' => 'phpredis',
    ],
];
