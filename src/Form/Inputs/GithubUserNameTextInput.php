<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class GithubUserNameTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('github_user_name')
            ->label(__('Github User Name'));
    }
}
