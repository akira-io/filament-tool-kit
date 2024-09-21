<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class UpdatedAtExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('updated_at')
            ->label(__('Updated At'));
    }
}
