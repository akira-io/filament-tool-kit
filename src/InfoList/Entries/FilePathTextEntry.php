<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\InfoList\Entries;

use Filament\Infolists\Components\TextEntry;

final class FilePathTextEntry
{
    public static function make(): TextEntry
    {
        return TextEntry::make('file_path')
            ->label(__('File Path'))
            ->limit()
            ->badge();
    }
}
