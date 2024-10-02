<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class OccupationTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('occupation')
            ->label(__('Occupation'));
    }
}
