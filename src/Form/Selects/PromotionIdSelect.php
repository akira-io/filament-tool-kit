<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class PromotionIdSelect
{
    public static function make(): Select
    {
        return Select::make('promotion_id')
            ->searchable()
            ->preload()
            ->label(__('Promotion'));
    }
}
