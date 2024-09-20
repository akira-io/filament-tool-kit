<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class PasswordTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('password')
            ->label(__('Password'))
            ->required()
            ->revealable()
            ->password()
            ->minLength(8)
            ->maxLength(255);
    }
}
