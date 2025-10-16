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
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => 'First book in the Harry Potter series',
                'publish_date' => '1997-06-26',
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Shining',
                'description' => 'A horror novel about a haunted hotel',
                'publish_date' => '1977-01-28',
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Murder on the Orient Express',
                'description' => 'A detective novel featuring Hercule Poirot',
                'publish_date' => '1934-01-01',
                'author_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Da Vinci Code',
                'description' => 'A mystery thriller novel',
                'publish_date' => '2003-03-18',
                'author_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'description' => 'A romantic novel of manners',
                'publish_date' => '1813-01-28',
                'author_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}