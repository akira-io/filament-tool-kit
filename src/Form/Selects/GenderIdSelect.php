<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class GenderIdSelect
{
    public static function make(): Select
    {
        return Select::make('gender_id')
            ->searchable()
            ->preload()
            ->label(__('Gender'));
    }
}
