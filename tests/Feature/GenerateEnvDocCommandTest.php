<?php

namespace ArtARTs36\LaravelEnvDocumentator\Tests\Feature;

use ArtARTs36\LaravelEnvDocumentator\Ports\Console\Commands\GenerateEnvDocCommand;
use ArtARTs36\LaravelEnvDocumentator\Tests\TestCase;

final class GenerateEnvDocCommandTest extends TestCase
{
    /**
     * @covers \ArtARTs36\LaravelEnvDocumentator\Ports\Console\Commands\GenerateEnvDocCommand::handle
     */
    public function testHandle(): void
    {
        $this->artisan(GenerateEnvDocCommand::class, [
            'doc-path' => '123.md',
            '--env-path' => __DIR__ . '/../Mocks/1.env',
        ])->assertSuccessful();
    }
}
