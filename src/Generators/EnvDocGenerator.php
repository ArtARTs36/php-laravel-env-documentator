<?php

namespace ArtARTs36\LaravelEnvDocumentator\Generators;

use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;
use Illuminate\Filesystem\Filesystem;

class EnvDocGenerator
{
    public function __construct(
        private EnvDocumentator $documentator,
        private Filesystem $files,
    ) {
        //
    }

    public function generate(string $docPath, string $envPath): bool
    {
        $prevHash = $this->files->exists($docPath) ? $this->files->hash($docPath) : '';

        $content = $this->documentator->generate($envPath);

        $this->files->put($docPath, $content);

        return $prevHash !== $this->files->hash($docPath);
    }
}
