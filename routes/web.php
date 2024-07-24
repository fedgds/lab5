<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
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

// Route::get('/product', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::controller(ProductController::class)
    ->name('product.')
    ->prefix('products/')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit', 'edit')->name('edit');
        Route::put('update', 'update')->name('update');
        Route::delete('delete', 'delete')->name('delete');
    });

Route::controller(CategoryController::class)
    ->name('category.')
    ->prefix('categories/')
    ->group(function() {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit', 'edit')->name('edit');
        Route::put('update', 'update')->name('update');
        Route::delete('delete', 'delete')->name('delete');
    });
 