<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class CompanyPhoneTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('company_phone')
            ->label(__('Company phone'));
    }
}
