<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            'view contacts',
            'create contact',
            'edit contact',
            'delete contact',
            'view users',
            'edit users',
            'delete users',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        $adminRole->syncPermissions($permissions);

        $userPermissions = array_filter($permissions, function ($permission) {
            return $permission !== 'delete contact' && $permission !== 'view users' && $permission !== 'edit users' && $permission !== 'delete users';
        });
        $userRole->syncPermissions($userPermissions);
    }
}

