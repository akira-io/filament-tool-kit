<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class CompanyEmailTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('company_email')
            ->email()
            ->label(__('Company email'));
    }
}
