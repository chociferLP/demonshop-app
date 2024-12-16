<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Create Admin Role
        Role::create(['name' => 'admin']);

        // Optionally, create other roles
        Role::create(['name' => 'user']);
    }
}
