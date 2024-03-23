<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

class AuthenticatableNameExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('authenticatable.name')
            ->label(__('Name'));
    }
}
