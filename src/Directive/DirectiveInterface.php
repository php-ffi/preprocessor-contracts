<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    /**
     * @return string
     */
    public function __invoke(): string;
}
