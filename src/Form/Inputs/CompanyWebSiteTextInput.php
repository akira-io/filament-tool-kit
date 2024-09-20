<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class CompanyWebSiteTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('company_website')
            ->prefix('https://')
            ->label(__('Company website'));
    }
}
