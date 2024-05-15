<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@londonist.com',
            'password' => Hash::make('123456'),
        ]);
        $adminUser->assignRole('admin');
        $adminUser->generateApiToken();

        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@londonist.com',
            'password' => Hash::make('123456'),
        ]);
        $user->assignRole('user');
        $user->generateApiToken();

        $user2 = User::factory()->create([
            'name' => 'User2',
            'email' => 'user2@londonist.com',
            'password' => Hash::make('123456'),
        ]);
        $user2->assignRole('user');
        $user2->generateApiToken();
    }
}
