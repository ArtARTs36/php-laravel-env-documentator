<?php

namespace ArtARTs36\LaravelEnvDocumentator\Contracts;

interface EnvDocumentator
{
    public function generate(string $envPath): string;
}
