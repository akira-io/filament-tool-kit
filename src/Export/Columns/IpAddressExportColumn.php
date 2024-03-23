<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

class IpAddressExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('ip_address')
            ->label(__('IP address'));
    }
}
