<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

final class IsOpenSourceToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('is_open_source')
            ->label(__('Is Open Source'));
    }
}
