<?php

namespace Database\Seeders;
use App\Models\AdminRols;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        AdminRols::create([
            'name' => 'Super Admin',
            'permissions' => json_encode(['create', 'update', 'delete']),
            'status' => 1
        ]);

        AdminRols::create([
            'name' => 'Editor',
            'permissions' => json_encode(['update']),
            'status' => 1
        ]);
    }
}
