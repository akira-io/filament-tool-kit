<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\DatePickers;

use Filament\Forms\Components\DatePicker;

final class ClosedDateDatePicker
{
    public static function make(): DatePicker
    {
        return DatePicker::make('closed_date')
            ->label(__('Closed Date'))
            ->displayFormat(config('tool-kit.date_format'))
            ->native(false);
    }
}
