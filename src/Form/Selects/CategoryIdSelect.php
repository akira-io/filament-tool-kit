<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class CategoryIdSelect
{
    public static function make(): Select
    {
        return Select::make('category_id')
            ->searchable()
            ->preload()
            ->label(__('Category'));
    }
}
