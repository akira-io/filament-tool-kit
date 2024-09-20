<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akira\FilamentToolKit\FilamentToolKit
 */
final class FilamentToolKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akira\FilamentToolKit\FilamentToolKit::class;
    }
}
