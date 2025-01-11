<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class ScheduleReturnSelect
{
    public static function make(): Select
    {
        return Select::make('schedule_return')
            ->searchable()
            ->preload()
            ->label(__('Schedule Return'));
    }
}
