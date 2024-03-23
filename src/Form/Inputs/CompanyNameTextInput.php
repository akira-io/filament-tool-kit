<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class CompanyNameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('company_name')
            ->label(__('Company name'));
    }
}
