<?php

namespace App\Http\Controllers;

use App\Models\Makanan;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [
            'title' => 'Menu',
            'listMakanan' => Makanan::index()
        ]);
    }
}
