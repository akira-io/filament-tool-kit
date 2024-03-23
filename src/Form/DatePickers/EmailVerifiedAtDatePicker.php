<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\DatePickers;

use Filament\Forms\Components\DatePicker;

class EmailVerifiedAtDatePicker
{
    public static function make(): DatePicker
    {
        return DatePicker::make('email_verified_at')
            ->label(__('E-mail verified at'))
            ->displayFormat(config('tool-kit.date_format'))
            ->native(false);
    }
}
