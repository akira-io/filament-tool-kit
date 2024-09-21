<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class PhoneNumberExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('phone_number')
            ->label(__('Phone Number'));
    }
}
