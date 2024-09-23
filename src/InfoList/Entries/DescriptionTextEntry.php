<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class DescriptionTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('description')
            ->label(__('Description'))
            ->html()
            ->columnSpanFull()->badge(false);
    }
}
