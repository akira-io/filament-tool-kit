<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class Iso2TextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('iso2')
            ->label(__('Iso2'))
            ->unique(ignoreRecord: true);
    }
}
