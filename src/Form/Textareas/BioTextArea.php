<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Textareas;

use Filament\Forms\Components\Textarea;

final class BioTextArea
{
    public static function make(): Textarea
    {
        return Textarea::make('bio')
            ->label(__('Bio'));
    }
}
