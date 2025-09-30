<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class GithubUrlTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('github_url')
            ->label(__('Github Url'))
            ->copyable();
    }
}
