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
                'name' => 'J.K. Rowling',
                'bio' => 'British author, best known for Harry Potter series',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stephen King',
                'bio' => 'American author of horror and suspense novels',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agatha Christie',
                'bio' => 'English mystery writer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dan Brown',
                'bio' => 'American author of thriller fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Austen',
                'bio' => 'English novelist of romantic fiction',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}