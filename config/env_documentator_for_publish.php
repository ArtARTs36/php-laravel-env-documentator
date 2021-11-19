<?php

return [
    'env' => [
        'default_path' => base_path('.env.example'),
        'preset' => [
            'files' => [
                __DIR__ . '/../vendor/artarts36/laravel-env-documentator/resources/presets/laravel_en.php',
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
            'login' => 'my-login',
            'token' => env('ENV_DOCUMENTATOR_GIT_TOKEN'),
        ],
    ],
];
