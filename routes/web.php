<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'products'], function () {

    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('site.products.index');
    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('site.products.show');

});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('admin.home');

    //Products
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::patch('/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});
