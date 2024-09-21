<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class LastNameExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('last_name')
            ->label(__('Last Name'));
    }
}
