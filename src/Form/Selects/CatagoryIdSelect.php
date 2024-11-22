<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class CatagoryIdSelect
{
    public static function make(): Select
    {
        return Select::make('catagory_id')
            ->searchable()
            ->preload()
            ->label(__('Catagory'));
    }
}
