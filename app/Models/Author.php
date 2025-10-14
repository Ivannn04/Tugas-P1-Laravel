<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public static function allData()
    {
        return [
            ['id' => 1, 'nama' => 'Bara Morado Masadi'],
            ['id' => 2, 'nama' => 'Bima Adnandita'],
            ['id' => 3, 'nama' => 'Haruki Murakami'],
            ['id' => 4, 'nama' => 'Stephen King'],
            ['id' => 5, 'nama' => 'Tere Liye'],
        ];
    }
}
