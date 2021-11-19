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
    'LOG_DEPRECATIONS_CHANNEL' => [
        'description' => 'This option controls the log channel that should be used to log warnings',
        'type' => 'string',
    ],
    'LOG_LEVEL' => [
        'description' => 'Log Level (critical, debug)',
        'type' => 'string',
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
        'type' => 'string',
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
    'FILESYSTEM_DRIVER' => [
        'description' => 'File System Driver (local/ftp/sftp/s3)',
    ],
    'QUEUE_CONNECTION' => [
        'description' => 'Default Queue Connection Name (sync/database/redis)',
    ],
    'MAIL_MAILER' => [
        'description' => 'Default Mailer (smtp/log/array)',
        'type' => 'string',
    ],
    'MAIL_HOST' => [
        'description' => 'Mail Host',
        'type' => 'string',
    ],
    'MAIL_PORT' => [
        'description' => 'Mail Port',
        'type' => 'integer',
    ],
    'MAIL_USERNAME' => [
        'description' => 'Mail User Name',
        'type' => 'string',
    ],
    'MAIL_PASSWORD' => [
        'description' => 'Mail User Password',
        'type' => 'string',
    ],
    'MAIL_ENCRYPTION' => [
        'description' => 'Mail Encryption (tls/null)',
        'type' => 'string',
    ],
    'MAIL_FROM_ADDRESS' => [
        'description' => 'Mail Sender Address (my@gmail.com)',
        'type' => 'string',
    ],
    'MAIL_FROM_NAME' => [
        'description' => 'Mail Sender Name',
        'type' => 'string',
    ],
    'BROADCAST_DRIVER' => [
        'description' => 'Broadcast Driver ("pusher", "ably", "redis", "log", "null")',
        'type' => 'string',
    ],
    'PUSHER_APP_ID' => [
        'description' => 'Pusher Application ID',
        'type' => 'string',
    ],
    'PUSHER_APP_KEY' => [
        'description' => 'Pusher Application Key',
        'type' => 'string',
    ],
    'PUSHER_APP_SECRET' => [
        'description' => 'Pusher Application Secret',
        'type' => 'string',
    ],
    'PUSHER_APP_CLUSTER' => [
        'description' => 'Pusher Application Cluster',
        'type' => 'string',
    ],
    'AWS_ACCESS_KEY_ID' => [
        'description' => 'AWS Access Key ID',
    ],
    'AWS_SECRET_ACCESS_KEY' => [
        'description' => 'AWS SECRET Access Key',
    ],
    'AWS_DEFAULT_REGION' => [
        'description' => 'AWS Default Region',
    ],
    'AWS_BUCKET' => [
        'description' => 'AWS Bucket',
    ],
    'AWS_USE_PATH_STYLE_ENDPOINT' => [
        'description' => 'AWS: Use path style endpoint',
    ],
    'CACHE_DRIVER' => [
        'description' => 'Cache Driver (file, database, array, memcached, redis)',
    ],
    'MIX_PUSHER_APP_KEY' => [
        'description' => 'MIX Pusher Application Key',
    ],
    'MIX_PUSHER_APP_CLUSTER' => [
        'description' => 'MIX Pusher Application Cluster',
    ],
    'MEMCACHED_HOST' => [
        'description' => 'Memcached Host',
    ],
];
