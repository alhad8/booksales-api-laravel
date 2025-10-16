<?php

namespace App\Models;

class Genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Non-Fiction'],
            ['id' => 3, 'name' => 'Science Fiction'],
            ['id' => 4, 'name' => 'Mystery'],
            ['id' => 5, 'name' => 'Romance'],
        ];
    }
}