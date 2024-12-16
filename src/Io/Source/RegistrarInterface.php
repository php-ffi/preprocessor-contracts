<?php

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
     */
    public function add(string $file, $source, bool $overwrite = false): bool;

    /**
     * @psalm-taint-sink file $file
     * @param non-empty-string $file
     */
    public function remove(string $file): bool;
}
