<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class FailedAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('failed_at')
            ->badge()
            ->date(config('tool-kit.date_time_format'))
            ->color('danger')
            ->label(__('Failed at'))
            ->color('danger');
    }
}
