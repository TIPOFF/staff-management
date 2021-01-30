<?php

namespace Tipoff\StaffManagement;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tipoff\StaffManagement\Commands\StaffManagementCommand;

class StaffManagementServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('staff-management')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_staff_management_table')
            ->hasCommand(StaffManagementCommand::class);
    }
}
