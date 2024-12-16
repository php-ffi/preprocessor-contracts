<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor;

use FFI\Contracts\Preprocessor\Io\Source\RepositoryInterface;

interface ProvidesSourcesInterface
{
    public function getSources(): RepositoryInterface;
}
