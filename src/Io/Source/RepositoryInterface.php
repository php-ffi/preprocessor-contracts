<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Io\Source;

use Phplrt\Contracts\Source\ReadableInterface;

/**
 * @template-extends \Traversable<non-empty-string, ReadableInterface>
 */
interface RepositoryInterface extends \Countable, \Traversable {}
