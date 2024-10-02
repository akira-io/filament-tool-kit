<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class AddressTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('address')
            ->label(__('Address'));
    }
}
