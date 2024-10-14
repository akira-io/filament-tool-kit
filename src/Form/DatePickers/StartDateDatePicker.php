<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\DatePickers;

use Filament\Forms\Components\DatePicker;

final class StartDateDatePicker
{
    public static function make(): DatePicker
    {
        return DatePicker::make('start_date')
            ->label(__('Start Date'))
            ->displayFormat(config('tool-kit.date_format'))
            ->prefixIcon('heroicon-o-calendar')
            ->native(false);
    }
}
