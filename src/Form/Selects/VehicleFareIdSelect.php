<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class VehicleFareIdSelect
{
    public static function make(): Select
    {
        return Select::make('vehicle_fare_id')
            ->searchable()
            ->preload()
            ->label(__('Vehicle Fare'));
    }
}
