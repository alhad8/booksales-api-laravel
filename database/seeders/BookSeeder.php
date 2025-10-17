<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'A Dance with Dragons',
                'description' => 'The fifth book in the A Song of Ice and Fire series, full of war, betrayal, and dragons.',
                'price' => 185000,
                'stock' => 30,
                'cover_photo' => 'dance_with_dragons.jpg',
                'genre_id' => 1, // Fantasy
                'author_id' => 1, // George R.R. Martin
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gone Girl',
                'description' => 'A gripping psychological thriller about a missing wife and the secrets of marriage.',
                'price' => 150000,
                'stock' => 25,
                'cover_photo' => 'gone_girl.jpg',
                'genre_id' => 2, // Thriller
                'author_id' => 2, // Gillian Flynn
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Martian',
                'description' => 'A stranded astronaut must survive alone on Mars using ingenuity and science.',
                'price' => 160000,
                'stock' => 28,
                'cover_photo' => 'the_martian.jpg',
                'genre_id' => 3, // Science Fiction
                'author_id' => 3, // Andy Weir
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Spider-Man: Into the Spider-Verse',
                'description' => 'A Marvel comic featuring multiple Spider-Men across different universes.',
                'price' => 135000,
                'stock' => 22,
                'cover_photo' => 'spiderverse.jpg',
                'genre_id' => 4, // Superhero
                'author_id' => 4, // Stan Lee
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Iron Man: Extremis',
                'description' => 'A high-tech Marvel story redefining Tony Stark’s Iron Man origin.',
                'price' => 128000,
                'stock' => 20,
                'cover_photo' => 'ironman_extremis.jpg',
                'genre_id' => 4, // Superhero
                'author_id' => 4, // Stan Lee
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Blood of Olympus',
                'description' => 'The thrilling conclusion to the Heroes of Olympus saga with gods and demigods.',
                'price' => 145000,
                'stock' => 35,
                'cover_photo' => 'blood_of_olympus.jpg',
                'genre_id' => 5, // Adventure
                'author_id' => 5, // Rick Riordan
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
