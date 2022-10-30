<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    MakananController::class, 'indexHome',
    PartnerController::class, 'index'
]);

Route::get('/menu', [MakananController::class, 'indexMenu']);

// Route::get('/detail', function (){
//     return view('detail', [
//         'title' => 'Detail'
//     ]);
// });
