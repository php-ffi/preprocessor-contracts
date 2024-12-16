<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Io\Directory;

/**
 * @template-extends \Traversable<array-key, non-empty-string>
 */
interface RepositoryInterface extends \Countable, \Traversable {}
