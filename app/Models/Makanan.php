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
            'deskripsi' => 'Sushi dengan isian salmon yang di padukan dengan bumbu dan saos khas PAPA JOE',
            'fotoMakanan' => '/makanan/SalmonSushiRoll.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 2,
            'namaMakanan' => 'Swekiauw Ayam',
            'deskripsi' => 'isian daging cincang ayam di campur dengan udang di bungkus dengan kulit pangsit dan rasakan kenikmatan duniawi',
            'fotoMakanan' => '/makanan/swekiauw.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 3,
            'namaMakanan' => 'Takoyaki',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE',
            'fotoMakanan' => '/makanan/takoyaki.jpeg',
            'menuFavorite' => 1
        ],
        [
            'id' => 4,
            'namaMakanan' => 'salmon Mentai',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE',
            'fotoMakanan' => '/makanan/salmonmentai.jpeg',
            'menuFavorite' => 2
        ],
        [
            'id' => 5,
            'namaMakanan' => 'salmon spicy roll',
            'deskripsi' => 'makanan khas jepang yang nikmat dan di beri bumbu khas PAPA JOE dengan sedikit pedas',
            'fotoMakanan' => '/makanan/spicysalmonroll.jpeg',
            'menuFavorite' => 2
        ],
        [
            'id' => 6,
            'namaMakanan' => 'Sate Babi',
            'deskripsi' => 'Daging babi pilihan yang di kelolah dengan bumbu khas PAPA JOE dan di bakar',
            'fotoMakanan' => '/makanan/satebabi.png',
            'menuFavorite' => 2
        ],
        [
            'id' => 7,
            'namaMakanan' => 'Kebab',
            'deskripsi' => 'isian daging sapi dengan sayur dan saos khas PAPA JOE',
            'fotoMakanan' => '/makanan/kebab.png',
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
