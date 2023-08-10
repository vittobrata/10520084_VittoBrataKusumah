<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produk/show', [ProdukController::class, 'store']);

Route::post('/produk/create', [ProdukController::class, 'store']);

Route::get('/produk/create', [ProdukController::class, 'create']);

Route::get('/belajar', function () {
    return view('welcome');
});

//Route::get('/belajar', [ProdukController::class, 'index']);

/*Route::get('belajar', function() {
    //echo 'Belajar Laravel. Tulisan ini ditampilkan dari routes';
    $nama ="Vitto";
    $jk ="Laki-Laki";
    return view('belajar', compact('nama', 'jk'));
});*/

//Route::get('nama', function() {
    //echo 'Nama Saya Vitto Brata Kusumah';
//    return view('nama');
//});

//Route::get('kelas', function() {
    //echo 'Kelas IS-3';
//    return view('kelas');
//});

//Route::get('teman', function(){
    //echo 'Riyadi';
//    return view('teman');
//});
