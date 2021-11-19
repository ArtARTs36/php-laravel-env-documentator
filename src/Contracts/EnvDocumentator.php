<?php

namespace ArtARTs36\LaravelEnvDocumentator\Contracts;

use ArtARTs36\LaravelEnvDocumentator\Env\VariableSet;

interface EnvDocumentator
{
    /**
     * Generate doc content
     */
    public function generate(VariableSet $set): string;
}
