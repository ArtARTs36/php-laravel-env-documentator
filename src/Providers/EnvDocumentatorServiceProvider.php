<?php

namespace ArtARTs36\LaravelEnvDocumentator\Providers;

use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;
use ArtARTs36\LaravelEnvDocumentator\Documentators\TemplateEnvDocumentator;
use Illuminate\Support\ServiceProvider;

class EnvDocumentatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(EnvDocumentator::class, TemplateEnvDocumentator::class);
    }
}
