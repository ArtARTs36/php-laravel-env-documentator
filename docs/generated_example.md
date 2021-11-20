# Environment Variables

|  Variable |  Description | Type  | Default Value |
| ------------ | ------------ | ------------ | ------------ |
|  APP_NAME | Application Name  | string | Laravel |
|  APP_ENV | Application Environment (production/testing/local)  | string | local |
|  APP_KEY | Application Key  | string |  |
|  APP_DEBUG | Debug Mode (true/false)  | boolean | 1 |
|  APP_URL | APP HTTP Url  | string | http://localhost |
|  LOG_CHANNEL | Default Log Channel  | string | stack |
|  LOG_DEPRECATIONS_CHANNEL | This option controls the log channel that should be used to log warnings  | string |  |
|  LOG_LEVEL | Log Level (critical, debug)  | string | debug |
|  DB_CONNECTION | Database Connection (pgsql/mysql/sqlite)  | string | pgsql |
|  DB_HOST | Database Host  | string | postgres |
|  DB_PORT | Database Port  | integer | 5432 |
|  DB_DATABASE | Database Name  | string | forge |
|  DB_USERNAME | Database User  | string | forge |
|  DB_PASSWORD | Database User's Password  | string | forge |
|  BROADCAST_DRIVER | Broadcast Driver ("pusher", "ably", "redis", "log", "null")  | string | log |
|  CACHE_DRIVER | Cache Driver (file, database, array, memcached, redis)  | string | file |
|  FILESYSTEM_DRIVER | File System Driver (local/ftp/sftp/s3)  | string | local |
|  QUEUE_CONNECTION | Default Queue Connection Name (sync/database/redis)  | string | sync |
|  SESSION_DRIVER | HTTP Session Driver  | string | file |
|  SESSION_LIFETIME | HTTP Session Lifetime  | integer | 120 |
|  MEMCACHED_HOST | Memcached Host  | string | 127.0.0.1 |
|  REDIS_HOST | Redis Host  | string | 127.0.0.1 |
|  REDIS_PASSWORD | Redis Password  | string |  |
|  REDIS_PORT | Redis Port  | integer | 6379 |
|  MAIL_MAILER | Default Mailer (smtp/log/array)  | string | smtp |
|  MAIL_HOST | Mail Host  | string | mailhog |
|  MAIL_PORT | Mail Port  | integer | 1025 |
|  MAIL_USERNAME | Mail User Name  | string |  |
|  MAIL_PASSWORD | Mail User Password  | string |  |
|  MAIL_ENCRYPTION | Mail Encryption (tls/null)  | string |  |
|  MAIL_FROM_ADDRESS | Mail Sender Address (my@gmail.com)  | string |  |
|  MAIL_FROM_NAME | Mail Sender Name  | string | ${APP_NAME} |
|  AWS_ACCESS_KEY_ID | AWS Access Key ID  | string |  |
|  AWS_SECRET_ACCESS_KEY | AWS SECRET Access Key  | string |  |
|  AWS_DEFAULT_REGION | AWS Default Region  | string | us-east-1 |
|  AWS_BUCKET | AWS Bucket  | string |  |
|  AWS_USE_PATH_STYLE_ENDPOINT | AWS: Use path style endpoint  | boolean |  |
|  PUSHER_APP_ID | Pusher Application ID  | string |  |
|  PUSHER_APP_KEY | Pusher Application Key  | string |  |
|  PUSHER_APP_SECRET | Pusher Application Secret  | string |  |
|  PUSHER_APP_CLUSTER | Pusher Application Cluster  | string | mt1 |
|  MIX_PUSHER_APP_KEY | MIX Pusher Application Key  | string | ${PUSHER_APP_KEY} |
|  MIX_PUSHER_APP_CLUSTER | MIX Pusher Application Cluster  | string | ${PUSHER_APP_CLUSTER} |
