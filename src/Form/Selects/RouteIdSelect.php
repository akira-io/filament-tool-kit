<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class RouteIdSelect
{
    public static function make(): Select
    {
        return Select::make('route_id')
            ->searchable()
            ->preload()
            ->label(__('Route'));
    }
}
