<?php

namespace ArtARTs36\LaravelEnvDocumentator\Env;

use ArtARTs36\EnvEditor\Editor;
use Illuminate\Contracts\Config\Repository;

class VariableSetFactory
{
    public function __construct(private Repository $config)
    {
        //
    }

    public function create(string $envPath): VariableSet
    {
        $raw = $this->loadOfEnvFile($envPath);
        $config = $this->config->get('env_documentator.env.preset', []);

        if (count($config['files'] ?? []) > 0) {
            foreach ($config['files'] as $file) {
                $raw = $this->merge($raw, require $file);
            }
        }

        if (isset($config['dict'])) {
            $raw = $this->merge($raw, $config['dict']);
        }

        $variables = [];

        foreach ($raw as $variable) {
            $variables[$variable['name']] = Variable::fromArray($variable);
        }

        return new VariableSet($variables);
    }

    /**
     * @return array<string, Variable>
     */
    protected function loadOfEnvFile(string $path): array
    {
        $variables = [];

        foreach (Editor::load($path)->getVariables() as $variable) {
            $variables[$variable->name] = [
                'name' => $variable->name,
                'description' => $variable->comment(),
                'default_value' => $variable->value,
                'type' => $variable->type(),
            ];
        }

        return $variables;
    }

    protected function merge(array $one, array $two): array
    {
        foreach ($two as $name => $properties) {
            foreach ($properties as $k => $value) {
                $one[$name][$k] = $value;
            }
        }

        return $one;
    }
}
