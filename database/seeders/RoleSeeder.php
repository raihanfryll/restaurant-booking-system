<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'superadmin'])->givePermissionTo([
            'create-sub-admin',
            'edit-sub-admin',
            'delete-sub-admin',
            'reset-sub-admin',
            'add-table',
            'delete-table',
            'view-booking',
            'accept-booking',
            'reject-booking',
            'view-all-booking',
            'action-booking',
            'update-profile',
            'change-password',
            'recover-password',
        ]);

        Role::create(['name' => 'subadmin'])->givePermissionTo([
            'edit-sub-admin',
            'add-table',
            'delete-table',
            'view-booking',
            'accept-booking',
            'reject-booking',
            'view-all-booking',
            'action-booking',
            'update-profile',
            'change-password',
            'recover-password',
        ]);
    }
}
