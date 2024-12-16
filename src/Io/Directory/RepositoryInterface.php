<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Io\Directory;

/**
 * @template-extends \Traversable<array-key, non-empty-string>
 */
interface RepositoryInterface extends \Countable, \Traversable {}
