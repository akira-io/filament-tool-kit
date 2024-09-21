<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class DiscountTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('discount')
            ->numeric()
            ->default(0);
    }
}
