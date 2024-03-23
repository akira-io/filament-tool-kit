<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

class EmailVerifiedAtTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('email_verified_at')
            ->label(__('Email verified at'))
            ->toggleable(isToggledHiddenByDefault: true)
            ->date(config('tool-kit.date_format'))
            ->badge()
            ->color('success')
            ->sortable();
    }
}
