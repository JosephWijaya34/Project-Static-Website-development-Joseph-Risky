<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MenuController extends Controller
{
    public function index()
    {

        $menu = Makanan::index();
        if (request()->has('tipe')) {
            // $menu = Makanan::index()->where('kategori', request()->input('tipe', 'halal') === 'halal' ? 1 : 2);
            if (request()->input('tipe', 'halal') === 'halal') {
                $menu = Makanan::index()->where('kategori', 1);
            } else if (request()->input('tipe', 'halal') === 'nonhalal')
                $menu = Makanan::index()->where('kategori', 2);
            else {
                $menu = Makanan::index();
            }
        }


        return view('menu', [
            'title' => 'Menu',
            'listMakanan' => $menu
        ]);
    }
}
