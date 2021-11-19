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
    ],
    'MAIL_HOST' => [
        'description' => 'Mail хост',
    ],
    'MAIL_PORT' => [
        'description' => 'Mail порт',
    ],
    'MAIL_USERNAME' => [
        'description' => 'Имя пользователя mail сервера',
    ],
    'MAIL_PASSWORD' => [
        'description' => 'Пароль пользователя mail сервера',
    ],
    'MAIL_ENCRYPTION' => [
        'description' => 'Mail шифрование (tls/null)',
    ],
    'MAIL_FROM_ADDRESS' => [
        'description' => 'Адрес отправителя (my@gmail.com)',
    ],
    'MAIL_FROM_NAME' => [
        'description' => 'Имя отправителя',
    ],
];
