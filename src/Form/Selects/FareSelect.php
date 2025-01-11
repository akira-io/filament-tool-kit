<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class FareSelect
{
    public static function make(): Select
    {
        return Select::make('fare')
            ->searchable()
            ->preload()
            ->label(__('Fare'));
    }
}
