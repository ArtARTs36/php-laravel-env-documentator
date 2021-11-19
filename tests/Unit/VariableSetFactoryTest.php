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
                                    'APP_PORT' => [
                                        'default_value' => 8081,
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
                        'description' => "\n",
                        'defaultValue' => 'Laravel App',
                        'type' => 'string',
                    ],
                    'APP_PORT' => [
                        'name' => 'APP_PORT',
                        'description' => "\n",
                        'defaultValue' => '8081',
                        'type' => 'integer',
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
