<?php

namespace Dansup\ActivityPub\Commands;

use Illuminate\Console\Command;

class ActivityPubCommand extends Command
{
    public $signature = 'laravel-activitypub';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
