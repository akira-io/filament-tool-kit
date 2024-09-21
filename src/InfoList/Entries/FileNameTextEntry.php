<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class FileNameTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('file_name')
            ->label(__('File Name'))
            ->badge();
    }
}
