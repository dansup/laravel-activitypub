<?php

namespace Dansup\ActivityPub\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dansup\ActivityPub\ActivityPub
 */
class ActivityPub extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Dansup\ActivityPub\ActivityPub::class;
    }
}
