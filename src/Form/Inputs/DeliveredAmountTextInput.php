<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class DeliveredAmountTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('delivered_amount')
            ->label(__('Delivered Amount'))
            ->required()
            ->maxLength(191);
    }
}
