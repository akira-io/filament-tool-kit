<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class PhoneNumberTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('phone_number')
            ->label(__('Phone Number'));
    }
}
