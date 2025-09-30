<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class UserNameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('user_name')
            ->label(__('User Name'))
            ->required()
            ->unique(ignoreRecord: true);
    }
}
