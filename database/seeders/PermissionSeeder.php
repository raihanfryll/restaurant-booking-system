<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-sub-admin']);
        Permission::create(['name' => 'edit-sub-admin']);
        Permission::create(['name' => 'delete-sub-admin']);
        Permission::create(['name' => 'reset-sub-admin']);
        Permission::create(['name' => 'add-table']);
        Permission::create(['name' => 'delete-table']);
        Permission::create(['name' => 'view-booking']);
        Permission::create(['name' => 'accept-booking']);
        Permission::create(['name' => 'reject-booking']);
        Permission::create(['name' => 'view-all-booking']);
        Permission::create(['name' => 'action-booking']);
        Permission::create(['name' => 'update-profile']);
        Permission::create(['name' => 'change-password']);
        Permission::create(['name' => 'recover-password']);
    }
}
