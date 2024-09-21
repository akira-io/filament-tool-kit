<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class DocumentNumberExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('document_number')
            ->label(__('Document Number'));
    }
}
