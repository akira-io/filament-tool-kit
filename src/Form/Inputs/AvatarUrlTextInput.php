<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\TextInput;

final class AvatarUrlTextInput
{
    public static function make(): TextInput
    {
        return TextInput::make('avatar_url')
            ->label(__('Avatar Url'));
    }
}
