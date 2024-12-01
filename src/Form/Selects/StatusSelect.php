<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class StatusSelect
{
    public static function make(): Select
    {
        return Select::make('status')
            ->searchable()
            ->preload()
            ->label(__('Status'));
    }
}
