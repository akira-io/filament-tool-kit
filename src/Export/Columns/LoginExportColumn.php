<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

class LoginExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('login_at')
            ->label(__('Login at'));
    }
}
