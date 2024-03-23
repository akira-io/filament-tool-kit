<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class CodeTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('code')
            ->label(__('Code'))
            ->required()
            ->maxLength(191)
            ->unique(ignoreRecord: true);
    }
}
