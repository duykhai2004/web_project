<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
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
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/products/category/{id}', [ProductController::class, 'getAllProductsByCategory'])->name('products.category');
Route::get('/', [ProductController::class, 'search'])->name('home');
Route::get('/intro', [CategoryController::class,'getAllCategories'])->name('intro');
Route::get('/admin',function () {
    return view('admin.dashboard');
});

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('/{page}', function ($page) {
//         return view("admin.$page");
//     })->name('page');
// });

Route::get('/admin/products',[ProductController::class,'getAllProducts'])->name('admin.products');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/product', 'App\Http\Controllers\ProductController@getAllProducts')->name('products');
    Route::get('/create', 'App\Http\Controllers\ProductController@create')->name('create');
    Route::post('/product/store', 'App\Http\Controllers\ProductController@store')->name('product.store');

    Route::delete('/product/{id}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');

});








