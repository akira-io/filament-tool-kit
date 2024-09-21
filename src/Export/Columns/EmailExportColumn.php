<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class EmailExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('email')
            ->label(__('Email'));
    }
}
