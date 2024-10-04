<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class DoctorIdSelect
{
    public static function make(): Select
    {
        return Select::make('doctor_id')
            ->searchable()
            ->preload()
            ->label(__('Doctor'));
    }
}
