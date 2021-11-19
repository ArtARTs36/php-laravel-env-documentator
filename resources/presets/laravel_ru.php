<?php

return [
    'APP_NAME' => [
        'description' => 'Название приложения',
    ],
    'APP_ENV' => [
        'description' => 'Окружение приложения (production/testing/local)',
    ],
    'APP_KEY' => [
        'description' => 'Ключ приложения',
    ],
    'APP_DEBUG' => [
        'description' => 'Режим отладки (true/false)'
    ],
    'APP_PORT'  => [
        'description' => 'HTTP Порт приложения',
    ],
    'APP_URL'   => [
        'description' => 'HTTP Url приложения',
    ],
    'LOG_CHANNEL' => [
        'description' => 'Канал логирования по-умолчанию',
    ],
    'LOG_DEPRECATIONS_CHANNEL' => [
        'description' => 'Этот параметр управляет каналом журнала, который следует использовать для регистрации предупреждений',
        'type' => 'string',
    ],
    'DB_CONNECTION' => [
        'description' => 'Подключение к базе данных (pgsql/mysql/sqlite)',
    ],
    'DB_HOST' => [
        'description' => 'Хост базы данных',
    ],
    'DB_PORT' => [
        'description' => 'Порт базы данных',
    ],
    'DB_DATABASE' => [
        'description' => 'Название базы данных',
    ],
    'DB_USERNAME' => [
        'description' => 'Пользователь базы данных',
    ],
    'DB_PASSWORD' => [
        'description' => 'Пароль пользователя базы данных',
    ],
    'SESSION_DRIVER' => [
        'description' => 'Драйвер HTTP сессии',
    ],
    'SESSION_LIFETIME' => [
        'description' => 'Время жизни HTTP сессии',
    ],
    'REDIS_HOST' => [
        'description' => 'Redis хост',
    ],
    'REDIS_PASSWORD' => [
        'description' => 'Пароль от Redis',
    ],
    'REDIS_PORT' => [
        'description' => 'Redis порт',
    ],
    'REDIS_URL' => [
        'description' => 'Redis URL',
    ],
    'REDIS_CLIENT' => [
        'description' => 'Redis клиент',
        'default_value' => 'phpredis',
    ],
    'FILESYSTEM_DRIVER' => [
        'description' => 'Драйвер файловой системы (local/ftp/sftp/s3)',
    ],
    'QUEUE_CONNECTION' => [
        'description' => 'Название подключения к очереди по-умолчанию (sync/database/redis)',
    ],
    'MAIL_MAILER' => [
        'description' => 'Mailer по-умолчанию (smtp/log/array)',
        'type' => 'string',
    ],
    'MAIL_HOST' => [
        'description' => 'Mail хост',
        'type' => 'string',
    ],
    'MAIL_PORT' => [
        'description' => 'Mail порт',
        'type' => 'integer',
    ],
    'MAIL_USERNAME' => [
        'description' => 'Имя пользователя mail сервера',
        'type' => 'string',
    ],
    'MAIL_PASSWORD' => [
        'description' => 'Пароль пользователя mail сервера',
        'type' => 'string',
    ],
    'MAIL_ENCRYPTION' => [
        'description' => 'Mail шифрование (tls/null)',
        'type' => 'string',
    ],
    'MAIL_FROM_ADDRESS' => [
        'description' => 'Адрес отправителя (my@gmail.com)',
        'type' => 'string',
    ],
    'MAIL_FROM_NAME' => [
        'description' => 'Имя отправителя',
        'type' => 'string',
    ],
    'BROADCAST_DRIVER' => [
        'description' => 'Broadcast Драйвер ("pusher", "ably", "redis", "log", "null")',
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
    'AWS_SECRET_ACCESS_KEY_ID' => [
        'description' => 'AWS SECRET Access Key ID',
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
        'description' => 'Кэш драйвер (file, database, array, memcached, redis)',
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
