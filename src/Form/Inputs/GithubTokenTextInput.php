<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class GithubTokenTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('github_token')
            ->label(__('Github Token'));
    }
}
