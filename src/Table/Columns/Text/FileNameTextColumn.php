<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class FileNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('file_name')
            ->limit()
            ->searchable()
            ->label(__('File Name'));
    }
}
