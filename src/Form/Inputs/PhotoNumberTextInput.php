<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class PhotoNumberTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('photo_number')
            ->label(__('Photo Number'));
    }
}
