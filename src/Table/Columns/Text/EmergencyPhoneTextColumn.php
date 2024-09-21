<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class EmergencyPhoneTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('emergency_phone')
            ->label(__('Emergency Phone'))
            ->searchable();
    }
}
