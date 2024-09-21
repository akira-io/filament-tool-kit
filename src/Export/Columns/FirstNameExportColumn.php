<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class FirstNameExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('first_name')
            ->label(__('First Name'));
    }
}
