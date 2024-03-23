<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class EmailTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('email')
            ->label(__('E-mail'))
            ->email()
            ->required()
            ->unique(ignoreRecord: true)
            ->maxLength(255);
    }
}
