<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

class IsActiveToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('is_active')
            ->label(__('Inactive/Active'));
    }
}
