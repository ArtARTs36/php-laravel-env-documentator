<?php

namespace ArtARTs36\LaravelEnvDocumentator\Generators;

use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;
use ArtARTs36\LaravelEnvDocumentator\Env\VariableSetFactory;
use Illuminate\Filesystem\Filesystem;

class EnvDocGenerator
{
    public function __construct(
        private EnvDocumentator $documentator,
        private Filesystem $files,
        private VariableSetFactory $variables,
    ) {
        //
    }

    public function generate(string $docPath, string $envPath): bool
    {
        $prevHash = $this->files->exists($docPath) ? $this->files->hash($docPath) : '';

        $content = $this->documentator->generate($this->variables->create($envPath));

        $this->files->put($docPath, $content);

        return $prevHash !== $this->files->hash($docPath);
    }
}
