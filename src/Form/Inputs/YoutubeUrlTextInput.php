<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class YoutubeUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('youtube_url')
            ->label(__('Youtube Url'));
    }
}
