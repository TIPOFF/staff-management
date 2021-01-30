<?php

namespace Tipoff\StaffManagement;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tipoff\StaffManagement\StaffManagement
 */
class StaffManagementFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'staff-management';
    }
}
