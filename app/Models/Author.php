<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name', 'photo', 'bio'];
    public $timestamps = false;

    public static function allData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Bara Morado Masadi',
                'photo' => 'images/authors/bara.jpg',
                'bio' => 'Penulis muda dengan gaya narasi modern.'
            ],
            [
                'id' => 2,
                'name' => 'Bima Adnandita',
                'photo' => 'images/authors/bima.jpg',
                'bio' => 'Seorang novelis dengan karya bertema sosial.'
            ],
            [
                'id' => 3,
                'name' => 'Haruki Murakami',
                'photo' => 'images/authors/murakami.jpg',
                'bio' => 'Penulis Jepang terkenal dengan gaya surreal dan realisme magis.'
            ],
            [
                'id' => 4,
                'name' => 'Stephen King',
                'photo' => 'images/authors/king.jpg',
                'bio' => 'Penulis Amerika yang dikenal dengan novel horor dan thriller.'
            ],
            [
                'id' => 5,
                'name' => 'Tere Liye',
                'photo' => 'images/authors/tereliye.jpg',
                'bio' => 'Penulis Indonesia terkenal dengan karya yang menyentuh hati.'
            ],
        ];
    }
}
