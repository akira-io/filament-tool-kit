<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class BioTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('bio')
            ->label(__('Bio'));
    }
}
