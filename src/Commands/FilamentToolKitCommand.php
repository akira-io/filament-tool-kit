<?php

namespace Akira\FilamentToolKit\Commands;

use Illuminate\Console\Command;

class FilamentToolKitCommand extends Command
{
    public $signature = 'filament-tool-kit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
