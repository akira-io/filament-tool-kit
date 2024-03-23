<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

class LogoutAtExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('logout_at')
            ->label(__('Logout at'));
    }
}
