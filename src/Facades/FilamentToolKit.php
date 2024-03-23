<?php

namespace Akira\FilamentToolKit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akira\FilamentToolKit\FilamentToolKit
 */
class FilamentToolKit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Akira\FilamentToolKit\FilamentToolKit::class;
    }
}
