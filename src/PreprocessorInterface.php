<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor;

use FFI\Contracts\Preprocessor\Directive\RegistrarInterface as DirectiveRegistrarInterface;
use FFI\Contracts\Preprocessor\Exception\PreprocessorExceptionInterface;
use FFI\Contracts\Preprocessor\Io\Directory\RegistrarInterface as DirectoryRegistrarInterface;
use FFI\Contracts\Preprocessor\Io\Source\RegistrarInterface as SourceRegistrarInterface;
use FFI\Contracts\Preprocessor\ProvidesDirectoriesInterface as DirectoriesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesDirectivesInterface as DirectivesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesSourcesInterface as SourcesProviderInterface;
use Phplrt\Contracts\Source\ReadableInterface;

/**
 * @psalm-type SourceEntry = string|resource|ReadableInterface|\SplFileInfo
 */
interface PreprocessorInterface extends
    SourceRegistrarInterface,
    SourcesProviderInterface,
    DirectiveRegistrarInterface,
    DirectivesProviderInterface,
    DirectoryRegistrarInterface,
    DirectoriesProviderInterface
{
    /**
     * @param SourceEntry $source
     * @return ResultInterface
     * @throws PreprocessorExceptionInterface
     */
    public function process($source): ResultInterface;
}
