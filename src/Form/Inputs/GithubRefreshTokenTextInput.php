<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class GithubRefreshTokenTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('github_refresh_token')
            ->label(__('Github Refresh Token'));
    }
}
