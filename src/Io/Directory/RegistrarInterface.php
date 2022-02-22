<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
