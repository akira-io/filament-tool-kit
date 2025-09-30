<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class BlueskyUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('bluesky_url')
            ->label(__('Bluesky Url'));
    }
}
