<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class ExtraAmountTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('extra_amount')
            ->label(__('Extra Amount'));
    }
}
