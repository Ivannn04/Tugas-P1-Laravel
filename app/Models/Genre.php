<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name', 'description'];
    public $timestamps = false;

    public static function allData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Action',
                'description' => 'Genre yang menampilkan adegan penuh aksi, pertempuran, dan ketegangan tinggi.'
            ],
            [
                'id' => 2,
                'name' => 'Fantasy',
                'description' => 'Genre yang berisi unsur sihir, dunia imajiner, dan makhluk mistis.'
            ],
            [
                'id' => 3,
                'name' => 'Romance',
                'description' => 'Genre yang berfokus pada kisah cinta dan hubungan emosional antar karakter.'
            ],
            [
                'id' => 4,
                'name' => 'Horror',
                'description' => 'Genre yang bertujuan menimbulkan rasa takut, tegang, atau ngeri.'
            ],
            [
                'id' => 5,
                'name' => 'Comedy',
                'description' => 'Genre yang menghibur dengan adegan lucu, ringan, dan penuh humor.'
            ],
        ];
    }
}
