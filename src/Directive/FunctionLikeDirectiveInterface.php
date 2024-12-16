<?php

/**
 * This file is part of FFI package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Directive;

use FFI\Contracts\Preprocessor\Exception\DirectiveExecutionExceptionInterface;

interface FunctionLikeDirectiveInterface extends DirectiveInterface
{
    /**
     * @throws DirectiveExecutionExceptionInterface
     */
    public function __invoke(string ...$args): string;

    /**
     * @return positive-int|0
     */
    public function getMaxArgumentsCount(): int;

    /**
     * @return positive-int|0
     */
    public function getMinArgumentsCount(): int;
}
