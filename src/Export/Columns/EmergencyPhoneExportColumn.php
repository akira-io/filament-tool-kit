<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class EmergencyPhoneExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('emergency_phone')
            ->label(__('Emergency Phone'));
    }
}
