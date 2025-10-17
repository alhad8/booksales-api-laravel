<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name' => 'Fantasy',
                'description' => 'Magical worlds filled with mythical creatures, gods, and epic adventures.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thriller',
                'description' => 'Intense and suspenseful stories full of twists and dark secrets.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Science Fiction',
                'description' => 'Stories exploring futuristic science, technology, and space.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Superhero',
                'description' => 'Action-packed tales featuring heroes and villains from Marvel universes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Adventure',
                'description' => 'Fast-paced stories about courage, quests, and exploration.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
