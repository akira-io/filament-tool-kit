<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class LoginAtExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('login_at')
            ->label(__('Login At'));
    }
}
