<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Partner;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Home',
            'listMakanan' => Makanan::index(),
            'listPartner' => Partner::index()
        ]);
    }
}
