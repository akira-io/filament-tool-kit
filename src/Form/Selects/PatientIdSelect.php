<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;use Filament\Forms\Components\TextInput;

final class PatientIdSelect
{
    public static function make(): Select
    {
        return Select::make('patient_id')
            ->searchable()
            ->preload()
            ->label(__('Patient'));
    }
}
