<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class LinkedinUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('linkedin_url')
            ->label(__('Linkedin Url'))
            ->copyable();
    }
}
