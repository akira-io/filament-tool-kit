<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class BankTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('bank')
            ->label(__('Bank'))
            ->searchable();
    }
}
