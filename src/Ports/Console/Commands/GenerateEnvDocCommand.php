<?php

namespace ArtARTs36\LaravelEnvDocumentator\Ports\Console\Commands;

use ArtARTs36\LaravelEnvDocumentator\Generators\EnvDocGenerator;
use ArtARTs36\LaravelEnvDocumentator\Support\ConfigSendActionFactory;
use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository;

class GenerateEnvDocCommand extends Command
{
    protected $signature = 'env:doc {doc-path} {--env-path=} {--ci}';

    public function handle(Repository $config, EnvDocGenerator $generator, ConfigSendActionFactory $ci)
    {
        $envPath = $this->option('env-path') ?? $config->get('env_documentator.env.default_path');

        if ($generator->generate($docPath = $this->argument('doc-path'), $envPath)) {
            $this->info('Documentation updated');

            if ($this->option('ci')) {
                $ci->create()->send($docPath);
            }
        } else {
            $this->info('Documentation is actually');
        }
    }
}
