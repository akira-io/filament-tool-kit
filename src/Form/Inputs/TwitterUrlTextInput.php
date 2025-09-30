<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class TwitterUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('twitter_url')
            ->label(__('Twitter Url'));
    }
}
