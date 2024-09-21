<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

final class IsOpenToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('is_open')
            ->label(__('Is Open'));
    }
}
