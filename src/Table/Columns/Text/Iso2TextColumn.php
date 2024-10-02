<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class Iso2TextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('iso2')
            ->label(__('Iso2'));
    }
}
