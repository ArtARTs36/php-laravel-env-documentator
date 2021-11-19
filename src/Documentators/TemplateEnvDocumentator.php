<?php

namespace ArtARTs36\LaravelEnvDocumentator\Documentators;

use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;
use ArtARTs36\LaravelEnvDocumentator\Env\VariableSet;
use Illuminate\Contracts\View\Factory;

class TemplateEnvDocumentator implements EnvDocumentator
{
    public function __construct(
        protected Factory $view,
        protected string $template,
    ) {
        //
    }

    public function generate(VariableSet $set): string
    {
        return $this->view->make($this->template, [
            'variables' => $set->all(),
            'path'      => $set->envPath,
        ]);
    }
}
