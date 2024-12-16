<?php

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
