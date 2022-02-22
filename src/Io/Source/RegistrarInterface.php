<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Io\Source;

use FFI\Contracts\Preprocessor\PreprocessorInterface;

/**
 * @psalm-import-type SourceEntry from PreprocessorInterface
 */
interface RegistrarInterface
{
    /**
     * @psalm-taint-sink file $file
     * @param non-empty-string $file
     * @param SourceEntry $source
     * @param bool $overwrite
     * @return bool
     */
    public function add(string $file, $source, bool $overwrite = false): bool;

    /**
     * @psalm-taint-sink file $file
     * @param non-empty-string $file
     * @return bool
     */
    public function remove(string $file): bool;
}
