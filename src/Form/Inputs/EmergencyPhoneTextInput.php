<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class EmergencyPhoneTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('emergency_phone')
            ->tel()
            ->label(__('Emergency Phone'));
    }
}
