<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class PassengerFareIdSelect
{
    public static function make(): Select
    {
        return Select::make('passenger_fare_id')
            ->searchable()
            ->preload()
            ->label(__('Passenger Fare'));
    }
}
