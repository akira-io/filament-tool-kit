<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait CanIndentStrings
{
    protected function indentString(string $string, int $level = 1): string
    {
        return implode(
            PHP_EOL,
            array_map(
                fn (string $line): string => ($line !== '') ? (str_repeat('    ', $level)."{$line}") : '',
                explode(PHP_EOL, $string),
            ),
        );
    }
}
