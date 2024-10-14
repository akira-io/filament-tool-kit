<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\DatePickers;

use Filament\Forms\Components\DatePicker;

final class EndDateDatePicker
{
    public static function make(): DatePicker
    {
        return DatePicker::make('end_date')
            ->label(__('End Date'))
            ->displayFormat(config('tool-kit.date_format'))
            ->prefixIcon('heroicon-o-calendar')
            ->native(false);
    }
}
