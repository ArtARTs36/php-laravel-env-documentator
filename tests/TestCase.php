<?php

namespace ArtARTs36\LaravelEnvDocumentator\Tests;

use ArtARTs36\LaravelEnvDocumentator\Providers\EnvDocumentatorServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            EnvDocumentatorServiceProvider::class,
        ];
    }
}
