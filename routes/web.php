<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::middleware(['auth', 'LogRequestMiddleware'])->group(function () {
//     //daftar produk
//     Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//     //tambah produk
//     Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

//     //simpan produk baru
//     Route::post('/products/{id}', [ProductController::class, 'store'])->name('products.store');

//     //menampilkan form detail produk
//     Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

//     //menampilkan form edit produk
//     Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

//     //update produk
//     Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

//     //hapus produk
//     Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// });
