<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class LinkedinUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('linkedin_url')
            ->label(__('Linkedin Url'));
    }
}
