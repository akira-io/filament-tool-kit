<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class GithubTokenTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('github_token')
            ->label(__('Github Token'))
            ->copyable();
    }
}
