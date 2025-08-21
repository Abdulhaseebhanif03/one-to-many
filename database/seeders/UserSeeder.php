<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Hasan Raza',   'email' => 'hasan@example.com'],
            ['name' => 'Ali Ahmed',    'email' => 'ali@example.com'],
            ['name' => 'Ayesha Khan',  'email' => 'ayesha@example.com'],
            ['name' => 'Ahmed Malik', 'email' => 'ahmed@example.com'],
            ['name' => 'Sara Iqbal',   'email' => 'sara@example.com'],
            ['name' => 'Hammad Hanif',   'email' => 'hammad@example.com'],
            ['name' => 'Abdul Haseeb',    'email' => 'abdul@example.com'],
            ['name' => 'Minhaj Hanif',  'email' => 'minhaj@example.com'],
            ['name' => 'Mustafa Malik', 'email' => 'mustafa@example.com'],
            ['name' => 'Saira Iqbal',   'email' => 'saira@example.com'],

        ]);
    }
}
