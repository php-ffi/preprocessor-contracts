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
 * @template-extends \Traversable<array-key, DirectiveInterface>
 */
interface RepositoryInterface extends \Countable, \Traversable
{
    /**
     * @param non-empty-string $directive
     */
    public function defined(string $directive): bool;

    /**
     * @param non-empty-string $directive
     */
    public function find(string $directive): ?DirectiveInterface;
}
