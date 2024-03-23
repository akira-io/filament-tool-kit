<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

class CompanyTextAddressInput
{
    public static function make(): TextInput
    {
        return TextInput::make('company_address')
            ->label(__('Company address'));
    }
}
