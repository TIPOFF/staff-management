<?php

namespace Tipoff\StaffManagement\Commands;

use Illuminate\Console\Command;

class StaffManagementCommand extends Command
{
    public $signature = 'staff-management';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
