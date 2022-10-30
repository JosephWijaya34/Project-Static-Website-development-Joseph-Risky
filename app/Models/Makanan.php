<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    private static $listMakanan = [
        [
            'id' => 1,
            'namaMakanan' => 'Salmon Sushi Roll',
            'deskripsi' => 'Sushi dengan isian salmon rasanya anjing banget',
            'fotoMakanan' => 'SalmonSushiRoll.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 2,
            'namaMakanan' => 'Swekiauw Ayam',
            'deskripsi' => 'isian daging cincang ayam di campur dengan udang di bungkus dengan kulit pangsit dan rasakan kenikmatan duniawi',
            'fotoMakanan' => 'swekiauw.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 3,
            'namaMakanan' => 'Takoyaki',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE',
            'fotoMakanan' => 'takoyaki.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 4,
            'namaMakanan' => 'salmon Mentai',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE',
            'fotoMakanan' => 'salmonmentai.jpeg',
            'menuFavorite' => 2
        ],
        [
            'id' => 5,
            'namaMakanan' => 'salmon spicy roll',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE dengan sedikit pedas',
            'fotoMakanan' => 'spicysalmonroll.jpeg',
            'menuFavorite' => 2
        ]
    ];

    public static function index(){
        return collect(self::$listMakanan);
    }

    // public static function showMakanan($id){
    //     return self::index()->firstWhere('id', $id);
    // }
}
