<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;use Filament\Forms\Components\TextInput;

final class SpecialityIdSelect
{
    public static function make(): Select
    {
        return Select::make('speciality_id')
            ->searchable()
            ->preload()
            ->label(__('Speciality'));
    }
}
