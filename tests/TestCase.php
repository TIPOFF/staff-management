<?php

declare(strict_types=1);

namespace Tipoff\Seo\Tests;

use Laravel\Nova\NovaCoreServiceProvider;
use Tipoff\Authorization\AuthorizationServiceProvider;
use Tipoff\StaffManagement\StaffManagementServiceProvider;
use Tipoff\Support\SupportServiceProvider;
use Tipoff\TestSupport\BaseTestCase;
use Tipoff\TestSupport\Providers\NovaPackageServiceProvider;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            NovaCoreServiceProvider::class,
            NovaPackageServiceProvider::class,
            SupportServiceProvider::class,
            AuthorizationServiceProvider::class,
            StaffManagementServiceProvider::class,
        ];
    }
}
