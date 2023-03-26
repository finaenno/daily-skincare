<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\KategoriProdukAdminController;
use App\Http\Controllers\Admin\ItemProdukController;
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

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::prefix('kategoriProduk')->name('kategoriProduk.')->group(function () {
    Route::get('/', [KategoriProdukAdminController::class, 'index'])->name('index');
    Route::get('/create', [KategoriProdukAdminController::class, 'create'])->name('create');
    Route::post('/store', [KategoriProdukAdminController::class,'store'])->name('store');
});

Route::prefix('itemProduk')->name('itemProduk.')->group(function(){
    Route::get('/',[ItemProdukController::class,'index'])->name('index');
    Route::get('/create', [ItemProdukController::class, 'create'])->name('create');
    Route::post('/store', [ItemProdukController::class,'store'])->name('store');
    Route::get('/detail/{id}',[ItemProdukController::class, 'show'])->name('show');
    Route::delete('/delete/{id}',[ItemProdukController::class, 'destroy'])->name('destroy');
    Route::get('/edit/{id}',[ItemProdukController::class, 'edit'])->name('edit');
    Route::put('/update/{id}',[ItemProdukController::class, 'update'])->name('update');
});
