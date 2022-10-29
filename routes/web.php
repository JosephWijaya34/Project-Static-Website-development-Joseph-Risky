<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MakananController::class,'indexHome']);

Route::get('/menu',[
    MakananController::class,'indexMenu',
    MakananController::class,'show'
]);

Route::get('/detailMakanan/{id}',[MakananController::class,'show']);

Route::get('/detail', function (){
    return view('detail', [
        'title' => 'Detail'
    ]);
});
