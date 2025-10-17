<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name' => 'George R.R. Martin',
                'photo' => 'george_rr_martin.jpg',
                'bio' => 'American novelist and screenwriter, known for the epic fantasy series A Song of Ice and Fire.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gillian Flynn',
                'photo' => 'gillian_flynn.jpg',
                'bio' => 'American author known for her psychological thriller novels including Gone Girl.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Andy Weir',
                'photo' => 'andy_weir.jpg',
                'bio' => 'American author best known for The Martian, a sci-fi survival story set on Mars.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stan Lee',
                'photo' => 'stan_lee.jpg',
                'bio' => 'Legendary Marvel Comics writer and co-creator of Spider-Man, Iron Man, and The Avengers.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rick Riordan',
                'photo' => 'rick_riordan.jpg',
                'bio' => 'American author best known for creating the Percy Jackson and the Olympians series.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
