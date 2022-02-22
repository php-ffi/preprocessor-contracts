<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Directive;

use FFI\Contracts\Preprocessor\Exception\DirectiveDefinitionExceptionInterface;

interface RegistrarInterface
{
    /**
     * @param non-empty-string $directive
     * @param mixed $value
     * @throws DirectiveDefinitionExceptionInterface
     */
    public function define(string $directive, $value = DirectiveInterface::DEFAULT_VALUE): void;

    /**
     * @param non-empty-string $directive
     * @return bool
     */
    public function undef(string $directive): bool;
}
