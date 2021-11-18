<?php

namespace ArtARTs36\LaravelEnvDocumentator\Env;

class VariableSet implements \IteratorAggregate
{
    /**
     * @param array<string, Variable> $variables
     */
    public function __construct(private array $variables)
    {
        //
    }

    /**
     * @return iterable<Variable>
     */
    public function getIterator(): iterable
    {
        return new \ArrayIterator($this->variables);
    }
}
