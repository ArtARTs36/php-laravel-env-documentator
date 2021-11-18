<?php

return [
    'env' => [
        'default_path' => base_path('.env'),
        'preset' => [
            'files' => [],
            'dict' => [
                'VAR_NAME' => [
                    'description' => 'Var description..',
                ],
            ],
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
