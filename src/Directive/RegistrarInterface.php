<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Directive;

use FFI\Contracts\Preprocessor\Exception\DirectiveDefinitionExceptionInterface;

interface RegistrarInterface
{
    /**
     * @param non-empty-string $directive
     * @phpstan-param mixed $value
     *
     * @throws DirectiveDefinitionExceptionInterface
     */
    public function define(string $directive, $value = DirectiveInterface::DEFAULT_VALUE): void;

    /**
     * @param non-empty-string $directive
     */
    public function undef(string $directive): bool;
}
