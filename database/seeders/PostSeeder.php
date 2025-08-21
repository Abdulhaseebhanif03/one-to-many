<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'title'       => 'Laravel Basics',
                'description' => 'This post explains the basics of Laravel framework.',
                'user_id'     => 1, // 👈 ensure user with id=1 exists
            ],
            [
                'title'       => 'Eloquent Relationships',
                'description' => 'Understanding one-to-many and many-to-many relationships in Laravel.',
                'user_id'     => 2,
            ],
            [
                'title'       => 'Seeding in Laravel',
                'description' => 'How to insert dummy data using seeders and factories.',
                'user_id'     => 3,
            ],
            [
                'title'       => 'Blade Templates',
                'description' => 'Learn how to use Blade templating engine in Laravel.',
                'user_id'     => 1,
            ],
            [
                'title'       => 'Database Migrations',
                'description' => 'Best practices for writing and running database migrations.',
                'user_id'     => 2,
            ],
              [
                'title'       => 'Models Basics',
                'description' => 'This post explains the basics of Eloquent models in Laravel.',
                'user_id'     => 1, // 👈 ensure user with id=1 exists
            ],
            [
                'title'       => 'Controllers',
                'description' => 'Understanding controllers in Laravel.',
                'user_id'     => 2,
            ],
            [
                'title'       => 'One to one relationships in Laravel',
                'description' => 'How to define and use one-to-one relationships in Eloquent.',
                'user_id'     => 3,
            ],
            [
                'title'       => 'Many to Many Relationships in Laravel',
                'description' => 'Learn how to define and use many-to-many relationships in Eloquent.',
                'user_id'     => 1,
            ],
            [
                'title'       => 'seeder Migrations',
                'description' => 'Best practices for writing and running seeder migrations.',
                'user_id'     => 2,
            ],
        ]);
    }
}
