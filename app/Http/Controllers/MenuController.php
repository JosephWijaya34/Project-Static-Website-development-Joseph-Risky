<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MenuController extends Controller
{
    public function index(){

        $menu = Makanan::index();

        if(request()->has('tipe')) {
            $menu = Makanan::index()->where('kategori', request()->input('tipe', 'halal') === 'halal' ? 1 : 2);
        }

        return view('menu', [
            'title' => 'Menu',
            'listMakanan' => $menu
        ]);
    }
}
