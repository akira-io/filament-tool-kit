<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Toggles;

use Filament\Tables\Columns\ToggleColumn;

final class IsActiveToggleColumn
{
    public static function make(): ToggleColumn
    {
        return ToggleColumn::make('is_active')
            ->label(__('Inactive/Active'));
    }
}
