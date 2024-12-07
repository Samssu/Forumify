<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'slug' => 'code-review',
                'name' => 'code-review',
            ],
            [
                'slug' => 'eloquent',
                'name' => 'eloquent',
            ],
            [
                'slug' => 'facade',
                'name' => 'facade',
            ],
            [
                'slug' => 'general',
                'name' => 'general',
            ],
            [
                'slug' => 'javascript',
                'name' => 'javascript',
            ],
            [
                'slug' => 'mix',
                'name' => 'mix',
            ],
            [
                'slug' => 'request',
                'name' => 'request',
            ],
            [
                'slug' => 'server',
                'name' => 'server',
            ],
            [
                'slug' => 'vite',
                'name' => 'vite',
            ]
        ]);
    }
}
