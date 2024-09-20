<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class CreatedAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('created_at')
            ->label(__('Created at'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success');
    }
}
