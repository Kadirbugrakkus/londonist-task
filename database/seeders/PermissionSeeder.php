<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'view contacts']);
        Permission::create(['name' => 'create contact']);
        Permission::create(['name' => 'edit contact']);
        Permission::create(['name' => 'delete contact']);
    }
}
