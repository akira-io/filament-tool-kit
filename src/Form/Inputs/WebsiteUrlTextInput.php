<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class WebsiteUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('website_url')
            ->label(__('Website Url'));
    }
}
