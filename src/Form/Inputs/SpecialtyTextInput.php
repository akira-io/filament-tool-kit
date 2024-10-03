<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class SpecialtyTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('specialty')
            ->label(__('Specialty'));
    }
}
