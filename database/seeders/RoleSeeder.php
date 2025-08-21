<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['id' => 1, 'role_name' => 'Admin'],
            ['id' => 2, 'role_name' => 'Editor'],
            ['id' => 3, 'role_name' => 'User'],
            ['id' => 4, 'role_name' => 'Manager'],
        ];

        DB::table('role')->insert($roles);
    }
}
