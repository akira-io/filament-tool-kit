<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\DatePickers;

use Filament\Forms\Components\DatePicker;

final class BirthDateDatePicker
{
    public static function make(): DatePicker
    {
        return DatePicker::make('birth_date')
            ->label(__('Birth Date'))
            ->displayFormat(config('tool-kit.date_format'))
            ->prefixIcon('heroicon-o-calendar')
            ->native(false);
    }
}
