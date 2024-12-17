<?php

declare(strict_types=1);

namespace FFI\Contracts\Preprocessor\Tests;

use FFI\Contracts\Preprocessor\Directive\DirectiveInterface;
use FFI\Contracts\Preprocessor\Directive\FunctionLikeDirectiveInterface;
use FFI\Contracts\Preprocessor\Directive\RegistrarInterface as DirectiveRegistrarInterface;
use FFI\Contracts\Preprocessor\Directive\RepositoryInterface;
use FFI\Contracts\Preprocessor\PreprocessorInterface;
use FFI\Contracts\Preprocessor\ProvidesDirectivesInterface as DirectivesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesDirectoriesInterface as DirectoriesProviderInterface;
use FFI\Contracts\Preprocessor\ProvidesSourcesInterface as SourcesProviderInterface;
use FFI\Contracts\Preprocessor\Io\Source\RepositoryInterface as SourceRepositoryInterface;
use FFI\Contracts\Preprocessor\Directive\RepositoryInterface as DirectiveRepositoryInterface;
use FFI\Contracts\Preprocessor\Io\Directory\RepositoryInterface as DirectoryRepositoryInterface;
use FFI\Contracts\Preprocessor\ResultInterface;

/**
 * Note: Changing the behavior of these tests is allowed ONLY when updating
 *       a MAJOR version of the package.
 */
final class InterfaceCompatibilityTest extends TestCase
{
    public function testResultCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements ResultInterface {
            public function __toString(): string {}
            public function getDirectives(): DirectiveRepositoryInterface {}
            public function getDirectories(): DirectoryRepositoryInterface {}
            public function getSources(): SourceRepositoryInterface {}
        };
    }

    public function testProvidesSourcesCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements SourcesProviderInterface {
            public function getSources(): SourceRepositoryInterface {}
        };
    }

    public function testProvidesDirectoriesCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements DirectoriesProviderInterface {
            public function getDirectories(): DirectoryRepositoryInterface {}
        };
    }

    public function testProvidesDirectivesCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements DirectivesProviderInterface {
            public function getDirectives(): DirectiveRepositoryInterface {}
        };
    }

    public function testPreprocessorCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements PreprocessorInterface {
            public function process($source): ResultInterface {}
            public function getDirectives(): DirectiveRepositoryInterface {}
            public function getDirectories(): DirectoryRepositoryInterface {}
            public function getSources(): SourceRepositoryInterface {}
            public function add(string $file, $source, bool $overwrite = false): bool {}
            public function remove(string $file): bool {}
            public function define(string $directive, $value = DirectiveInterface::DEFAULT_VALUE): void {}
            public function undef(string $directive): bool {}
            public function include(string $directory): void {}
            public function exclude(string $directory): void {}
        };
    }

    public function testDirectiveCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements DirectiveInterface {
            public function __invoke(): string {}
        };
    }

    public function testFunctionLikeDirectiveCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements FunctionLikeDirectiveInterface {
            public function __invoke(string ...$args): string {}
            public function getMaxArgumentsCount(): int {}
            public function getMinArgumentsCount(): int {}
        };
    }

    public function testDirectiveRegistrarCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements DirectiveRegistrarInterface {
            public function define(string $directive, $value = DirectiveInterface::DEFAULT_VALUE): void {}
            public function undef(string $directive): bool {}
        };
    }

    public function testDirectiveRepositoryCompatibility(): void
    {
        $this->expectNotToPerformAssertions();

        new class implements DirectiveRepositoryInterface, \IteratorAggregate {
            public function count(): int {}
            public function defined(string $directive): bool {}
            public function find(string $directive): ?DirectiveInterface {}
            public function getIterator(): \Traversable {}
        };
    }
}
