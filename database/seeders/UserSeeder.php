<?php

namespace Database\Seeders;

use SujanSht\AdminMaster\Models\Admin\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $super_admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
        ]);

        $role = Role::where('name', 'Super Admin')->first();

        $super_admin->roles()->attach($role);
    }
}
