<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Support\Commands\Concerns;

trait CanIdentStrings
{
    protected function indentString(string $string, int $level = 1): string
    {
        return implode(
            PHP_EOL,
            array_map(
                fn (string $line) => ($line !== '') ? (str_repeat('    ', $level) . "{$line}") : '',
                explode(PHP_EOL, $string),
            ),
        );
    }
}
