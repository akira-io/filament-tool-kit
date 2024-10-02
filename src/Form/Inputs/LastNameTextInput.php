<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class LastNameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('last_name')
            ->label(__('Last Name'))
            ->required();
    }
}
