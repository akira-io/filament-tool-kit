<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class DeletedAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('deleted_at')
            ->label(__('Deleted At'))
            ->date(config('tool-kit.date_format'))
            ->color('success')
            ->badge();
    }
}
