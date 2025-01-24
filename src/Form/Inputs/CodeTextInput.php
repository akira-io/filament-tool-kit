<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Inputs;

use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

final class CodeTextInput
{
    public static function make(int $length = 8): TextInput
    {
        return TextInput::make('code')
            ->label(__('Code'))
            ->required()
            ->maxLength(191)
            ->default(fn () => Str::random($length))
            ->suffixAction(
                Action::make('generateNewCode')
                    ->iconButton()
                    ->icon('heroicon-o-arrow-path-rounded-square')
                    ->action(fn (TextInput $component): TextInput => $component->state(fn () => Str::random($length)))
            )
            ->unique(ignoreRecord: true);
    }
}
