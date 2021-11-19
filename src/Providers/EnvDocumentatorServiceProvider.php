<?php

namespace ArtARTs36\LaravelEnvDocumentator\Providers;

use ArtARTs36\LaravelEnvDocumentator\Contracts\EnvDocumentator;
use ArtARTs36\LaravelEnvDocumentator\Documentators\TemplateEnvDocumentator;
use ArtARTs36\LaravelEnvDocumentator\Ports\Console\Commands\GenerateEnvDocCommand;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\ServiceProvider;

class EnvDocumentatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/env_documentator.php', 'env_documentator');

        $this->app->bind(EnvDocumentator::class, TemplateEnvDocumentator::class);

        $this->app->bind(TemplateEnvDocumentator::class, static function (Container $container) {
            return new TemplateEnvDocumentator(
                $container->make(Factory::class),
                $container->get('config')->get('env_documentator.documentators.template.view'),
            );
        });

        if ($this->app->runningInConsole()) {
            $this->commands(GenerateEnvDocCommand::class);
            $this->publishPackage();
        }

        $this->registerPackageViews();
    }

    protected function registerPackageViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views/', 'env_documentator');
    }

    protected function publishPackage(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/env_documentator_for_publish.php' =>
                $this->app->configPath('env_documentator.php'),
        ], 'config');
    }
}
