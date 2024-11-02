<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class DurationTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('duration')
            ->label(__('Duration'));
    }
}
