<?php

use App\Http\Controllers\ProdukController;
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

Route::get('/', [ProdukController::class, 'index'])->name('indexProduk');
Route::get('/produk/tambah', [ProdukController::class, 'create'])->name('createProduk');
Route::post('/produk/tambah', [ProdukController::class, 'store'])->name('storeProduk');
Route::get('/produk/destroy/{id}', [ProdukController::class, 'destroy'])->name('destroyProduk');
Route::get('/produk/edit/{id}', [ProdukController::class, 'edit'])->name('editProduk');
Route::post('/produk/edit', [ProdukController::class, 'update'])->name('updateProduk');
