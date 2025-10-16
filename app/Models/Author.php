<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'J.K. Rowling', 'bio' => 'British author of Harry Potter series'],
            ['id' => 2, 'name' => 'Stephen King', 'bio' => 'American author of horror and suspense'],
            ['id' => 3, 'name' => 'Agatha Christie', 'bio' => 'English mystery writer'],
            ['id' => 4, 'name' => 'Dan Brown', 'bio' => 'American thriller author'],
            ['id' => 5, 'name' => 'Jane Austen', 'bio' => 'English novelist of romantic fiction'],
        ];
    }
}