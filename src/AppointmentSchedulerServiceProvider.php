<?php

namespace WebplusMultimedia\AppointmentScheduler;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use WebplusMultimedia\AppointmentScheduler\Commands\AppointmentSchedulerCommand;

class AppointmentSchedulerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('appointment-scheduler')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_appointment-scheduler_table')
            ->hasCommand(AppointmentSchedulerCommand::class);
    }
}
