<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Textareas;

use Filament\Forms\Components\Textarea;

final class SummaryTextArea
{
    public static function make(): Textarea
    {
        return Textarea::make('summary')
            ->label(__('Summary'));
    }
}
