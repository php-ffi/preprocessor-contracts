<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Directive;

/**
 * @mixin callable
 */
interface DirectiveInterface
{
    /**
     * @var string
     */
    public const DEFAULT_VALUE = '';

    public function __invoke(): string;
}
