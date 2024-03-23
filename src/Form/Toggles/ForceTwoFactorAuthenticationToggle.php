<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

class ForceTwoFactorAuthenticationToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('force_two_factor_authentication')
            ->label(__('Force two-factor authentication'))
            ->helperText('Require users to enable two-factor authentication.');
    }
}
