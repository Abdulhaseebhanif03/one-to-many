<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['id' => 1, 'name' => 'Ali Khan', 'email' => 'ali@example.com'],
            ['id' => 2, 'name' => 'Sara', 'email' => 'sara@example.com'],
            ['id' => 3, 'name' => 'Bilal', 'email' => 'bilal@example.com'],
            ['id' => 4, 'name' => 'Hina', 'email' => 'hina@example.com'],
            ['id' => 5, 'name' => 'Usman', 'email' => 'usman@example.com'],
            ['id' => 6, 'name' => 'Ayesha', 'email' => 'ayesha@example.com'],
            ['id' => 7, 'name' => 'Hasan', 'email' => 'hasan@example.com'],
        ];

        DB::table('user')->insert($users);
    }
    protected $table = 'user';
}
