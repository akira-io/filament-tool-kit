<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;

final class ForcePasswordResetDaysTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('force_password_reset_days')
            ->label(__('Password reset days'))
            ->minValue(7)
            ->default(7)
            ->step(1)
            ->hidden(fn (Get $get) => ! $get('force_reset_password'))
            ->helperText(__('Require users to reset their password every x days.'));
    }
}
