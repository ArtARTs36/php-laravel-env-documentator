<?php

namespace ArtARTs36\LaravelEnvDocumentator\Documentators;

use ArtARTs36\EnvEditor\Editor;
use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;

class TemplateEnvDocumentator implements EnvDocumentator
{
    public function generate(string $envPath): string
    {
        $env = Editor::load($envPath);

        return '';
    }
}
