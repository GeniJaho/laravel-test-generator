<?php

namespace GeniJaho\LaravelTestGenerator\Commands;

use Illuminate\Console\Command;

class LaravelTestGeneratorCommand extends Command
{
    public $signature = 'laravel-test-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
