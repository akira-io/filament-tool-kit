<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class DepositPercentage
{
    public static function make(): TextColumn
    {
        return TextColumn::make('deposit_percentage')
            ->label(__('Deposit Percentage'));
    }
}
