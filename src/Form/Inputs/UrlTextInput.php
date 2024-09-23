<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class UrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('url')
            ->label(__('Url'))
            ->url();
    }
}
