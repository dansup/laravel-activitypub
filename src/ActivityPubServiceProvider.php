<?php

namespace Dansup\ActivityPub;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dansup\ActivityPub\Commands\ActivityPubCommand;

class ActivityPubServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-activitypub')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_activitypub_table')
            ->hasCommand(ActivityPubCommand::class);
    }
}
