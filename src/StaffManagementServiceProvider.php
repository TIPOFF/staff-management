<?php

declare(strict_types=1);

namespace Tipoff\StaffManagement;

use Tipoff\StaffManagement\Models\StaffManagement;
use Tipoff\StaffManagement\Policies\StaffManagementPolicy;
use Tipoff\Support\TipoffPackage;
use Tipoff\Support\TipoffServiceProvider;

class StaffManagementServiceProvider extends TipoffServiceProvider
{
    public function configureTipoffPackage(TipoffPackage $package): void
    {
        $package
            ->hasPolicies([
                StaffManagement::class => StaffManagementPolicy::class,
            ])
            ->name('staff-management')
            ->hasConfigFile();
    }
}
