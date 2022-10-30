<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    private static $listPartner = [
        [
            'id' => 1,
            'namaPartner' => 'Hokky',
            'fotoPartner' => 'hokky.png'

        ],
        [
            'id' => 2,
            'namaPartner' => 'Chicco',
            'fotoPartner' => 'chicco.png'
        ]
    ];

    public static function index(){
        return collect(self::$listPartner);
    }

    public static function showPartner($id){
        return self::index()->firstWhere('id', $id);
    }
}
