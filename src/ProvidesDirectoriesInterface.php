<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor;

use FFI\Contracts\Preprocessor\Io\Directory\RepositoryInterface;

interface ProvidesDirectoriesInterface
{
    public function getDirectories(): RepositoryInterface;
}
