<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

class ForceSecurePasswordToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('force_secured_password')
            ->label(__('Force secure password'))
            ->helperText(__('Require users to use a secure password.'));
    }
}
