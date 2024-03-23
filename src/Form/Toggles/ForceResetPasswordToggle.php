<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Toggles;

use Filament\Forms\Components\Toggle;

class ForceResetPasswordToggle
{
    public static function make(): Toggle
    {
        return Toggle::make('force_reset_password')
            ->label(__('Force reset password'))
            ->live()
            ->helperText(__('Require users to reset their password every x days.'));
    }
}
