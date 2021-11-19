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
        $docPath = '123.md';

        @unlink($docPath);

        $this->artisan(GenerateEnvDocCommand::class, [
            'doc-path' => $docPath,
            '--env-path' => __DIR__ . '/../Mocks/1.env',
        ])->assertSuccessful();

        self::assertFileExists($docPath);
        @unlink($docPath);
    }
}
