<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class FareIdSelect
{
    public static function make(): Select
    {
        return Select::make('fare_id')
            ->searchable()
            ->preload()
            ->label(__('Fare'));
    }
}
