<?php

return [
    'env' => [
        'default_path' => base_path('.env.example'),
        'preset' => [
            'files' => [
                __DIR__ . '/../resources/presets/laravel_ru.php',
            ],
            'dict' => [
                'VAR_NAME' => [
                    'description' => 'Var description..',
                    'default_value' => 'string_default_value',
                ],
            ],
        ],
    ],
    'documentators' => [
        'template' => [
            'view' => 'env_documentator::env_doc_markdown',
        ],
    ],
    'git' => [
        'bin' => 'git',
        'dir' => base_path(),
        'remote' => [
            'login' => env('ENV_DOCUMENTATOR_GIT_LOGIN'),
            'token' => env('ENV_DOCUMENTATOR_GIT_TOKEN'),
        ],
        'commit' => [
            'message' => '[DOCS] Build environment docs',
        ],
    ],
];
