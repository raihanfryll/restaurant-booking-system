<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected static ?string $password;
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'MobileNumber' => '1234596321',
            'UserType' => '1',
            'email' => 'admin@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
        ])->assignRole('superadmin');

        User::create([
            'name' => 'Anuj kumar',
            'username' => 'akr305',
            'MobileNumber' => '1234567891',
            'UserType' => '0',
            'email' => 'ak@gmail.com',
            'password' => static::$password ??= Hash::make('password'),
        ])->assignRole('subadmin');
    }
}
