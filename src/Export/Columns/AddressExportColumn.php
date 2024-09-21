<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Export\Columns;

use Filament\Actions\Exports\ExportColumn;

final class AddressExportColumn
{
    public static function make(): ExportColumn
    {
        return ExportColumn::make('address')
            ->label(__('Address'));
    }
}
