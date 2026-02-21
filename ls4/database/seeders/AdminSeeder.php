<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\AdminRols;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $role = AdminRols::where('name', 'Super Admin')->first();

        if (!$role) {
            $this->command->error('Super Admin role not found!');
            return;
        }

        Admin::create([
            'name' => 'System Admin',
            'email' => 'admin@test.com',
            'phone' => '1234567890',
            'password' => Hash::make('123456'),
            'roleId' => $role->id,
            'status' => 1
        ]);
    }
}
