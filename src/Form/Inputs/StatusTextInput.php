<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class StatusTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('status')
            ->label(__('Status'))
            ->required()
            ->maxLength(191)
            ->unique(ignoreRecord: true);
    }
}
