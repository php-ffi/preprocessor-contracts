<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor;

use FFI\Contracts\Preprocessor\ProvidesDirectivesInterface as DirectivesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesDirectoriesInterface as DirectoriesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesSourcesInterface as SourcesProviderInterface;

interface ResultInterface extends
    \Stringable,
    SourcesProviderInterface,
    DirectivesProviderInterface,
    DirectoriesProviderInterface {}
