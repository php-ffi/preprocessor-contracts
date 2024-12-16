<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Io\Directory;

interface RegistrarInterface
{
    /**
     * @psalm-taint-sink file $directory
     * @param non-empty-string $directory
     */
    public function include(string $directory): void;

    /**
     * @psalm-taint-sink file $directory
     * @param non-empty-string $directory
     */
    public function exclude(string $directory): void;
}
