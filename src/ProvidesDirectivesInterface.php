<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor;

use FFI\Contracts\Preprocessor\Directive\RepositoryInterface;

interface ProvidesDirectivesInterface
{
    public function getDirectives(): RepositoryInterface;
}
