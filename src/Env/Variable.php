<?php

namespace ArtARTs36\LaravelEnvDocumentator\Env;

use JetBrains\PhpStorm\ArrayShape;

class Variable
{
    public function __construct(
        public string $name,
        public string $description,
        public string $defaultValue,
        public string $type,
    ) {
        //
    }

    /**
     * @param array<string, string> $array
     */
    public static function fromArray(
        #[ArrayShape([
            'name' => 'string',
            'description' => 'string',
            'default_value' => 'string',
            'type'         => 'string',
        ])]
        array $array
    ): self {
        return new self(
            $array['name'],
            $array['description'] ?? '',
            $array['default_value'] ?? '',
            $array['type'] ?? '',
        );
    }
}
