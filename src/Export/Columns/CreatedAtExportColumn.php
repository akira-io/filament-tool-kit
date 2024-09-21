<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class CreatedAtExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('created_at')
            ->label(__('Created At'));
    }
}
