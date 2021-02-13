<?php

declare(strict_types=1);

namespace Tipoff\StaffManagement;

use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class StaffManagementServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->name('staff-management')
            ->hasConfigFile();
    }
}
