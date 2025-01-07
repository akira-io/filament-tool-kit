<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class NifTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('nif')
            ->unique(ignoreRecord: true)
            ->label(__('Nif'));
    }
}
