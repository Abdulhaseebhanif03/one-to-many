<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class User_RoleSeeder extends Seeder
{
    public function run(): void
    {
        $userRoles = [
            ['user_id' => 1, 'role_id' => 1], // Ali Khan = Admin
            ['user_id' => 2, 'role_id' => 2], // Sara = Editor
            ['user_id' => 3, 'role_id' => 3], // Bilal = User
            ['user_id' => 4, 'role_id' => 2], // Hina = Editor
            ['user_id' => 5, 'role_id' => 4], // Usman = Manager
            ['user_id' => 6, 'role_id' => 3], // Ayesha = User
            ['user_id' => 7, 'role_id' => 1], // Hasan = Admin
        ];

        // 👇 yahan correct table name use karo
        DB::table('user_role')->insert($userRoles);
    }
}
