<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/edit', function () {
    return view('edit');
});

use App\Http\Controllers\ProdukController;

Route::post('/simpan', [ProdukController::class, 'store']);