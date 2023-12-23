<?php

namespace DanielCristeaa\AwesomeAbTesting\Commands;

use Illuminate\Console\Command;

class AwesomeAbTestingCommand extends Command
{
    public $signature = 'laravel-awesome-ab-testing';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
