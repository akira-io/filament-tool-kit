<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DocumentNumberTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('document_number')
            ->label(__('Document Number'))
            ->searchable();
    }
}
