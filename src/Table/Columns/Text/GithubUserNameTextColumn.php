<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Table\Columns\Text;

use Filament\Tables\Columns\TextColumn;

final class GithubUserNameTextColumn
{
    public static function make(): TextColumn
    {
        return TextColumn::make('github_user_name')
            ->label(__('Github User Name'));
    }
}
