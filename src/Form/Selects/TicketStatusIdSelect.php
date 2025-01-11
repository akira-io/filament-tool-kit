<?php

declare(strict_types=1);

namespace Akira\FilamentToolKit\Form\Selects;

use Filament\Forms\Components\Select;

final class TicketStatusIdSelect
{
    public static function make(): Select
    {
        return Select::make('ticket_status_id')
            ->searchable()
            ->preload()
            ->label(__('Ticket Status'));
    }
}
