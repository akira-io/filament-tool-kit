<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class GithubIdTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('github_id')
            ->label(__('Github'));
    }
}
