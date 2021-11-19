<?php

namespace ArtARTs36\LaravelEnvDocumentator\Tests\Unit;

use ArtARTs36\LaravelEnvDocumentator\Env\VariableSetFactory;
use ArtARTs36\LaravelEnvDocumentator\Tests\TestCase;
use Illuminate\Config\Repository;

final class VariableSetFactoryTest extends TestCase
{
    public function providerForTestCreate(): array
    {
        return [
            [
                  [
                      'env_documentator' => [
                        'env' => [
                            'preset' => [
                                'files' => [

                                ],
                                'dict' => [
                                    'VAR_WITHOUT_VALUE' => [
                                        'description' => 'description-of-preset',
                                        'default_value' => 'value-of-preset',
                                    ],
                                ],
                            ],
                        ]
                      ],
                ],
                __DIR__ . '/../Mocks/1.env',
                [
                    'APP_NAME' => [
                        'name' => 'APP_NAME',
                        'description' => '',
                        'defaultValue' => 'Laravel App',
                        'type' => 'string',
                    ],
                    'APP_PORT' => [
                        'name' => 'APP_PORT',
                        'description' => '',
                        'defaultValue' => '8080',
                        'type' => 'integer',
                    ],
                    'APP_ENV' => [
                        'name' => 'APP_ENV',
                        'description' => '',
                        'defaultValue' => 'local',
                        'type' => 'string',
                    ],
                    'APP_KEY' => [
                        'name' => 'APP_KEY',
                        'description' => '',
                        'defaultValue' => '4r34t43t4',
                        'type' => 'string',
                    ],
                    'APP_DEBUG' => [
                        'name' => 'APP_DEBUG',
                        'description' => '',
                        'defaultValue' => true,
                        'type' => 'boolean',
                    ],
                    'VAR_WITHOUT_VALUE' => [
                        'name' => 'VAR_WITHOUT_VALUE',
                        'description' => 'description-of-preset',
                        'defaultValue' => 'value-of-preset',
                        'type' => 'string',
                    ],
                ]
            ],
        ];
    }

    /**
     * @dataProvider providerForTestCreate
     */
    public function testCreate(array $config, string $envPath, array $expected): void
    {
        $factory = new VariableSetFactory(new Repository($config));

        $results = [];

        foreach ($factory->create($envPath) as $key => $variable) {
            $results[$key] = get_object_vars($variable);
        }

        self::assertEquals($expected, $results);
    }
}
