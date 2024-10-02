<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class FirstNameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('first_name')
            ->label(__('First Name'));
    }
}
