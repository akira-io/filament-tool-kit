<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class NifTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('nif')
            ->copyable()
            ->badge()
            ->label(__('Nif'));
    }
}
