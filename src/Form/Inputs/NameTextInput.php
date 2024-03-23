<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class NameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('name')
            ->label(__('Name'))
            ->required()
            ->maxLength(255);
    }
}
