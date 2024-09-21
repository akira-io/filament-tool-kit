<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class DeletedAtExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('deleted_at')
            ->label(__('Deleted At'));
    }
}
