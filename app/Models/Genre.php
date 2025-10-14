<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function allData()
    {
        return [
            ['id' => 1, 'nama' => 'Action'],
            ['id' => 2, 'nama' => 'Fantasy'],
            ['id' => 3, 'nama' => 'Romance'],
            ['id' => 4, 'nama' => 'Horror'],
            ['id' => 5, 'nama' => 'Comedy'],
        ];
    }
}
