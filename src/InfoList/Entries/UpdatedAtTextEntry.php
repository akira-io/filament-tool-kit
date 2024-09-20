<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class UpdatedAtTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('updated_at')
            ->label(__('Updated at'))
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('info');
    }
}
