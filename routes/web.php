<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\SearchController;
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

Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about',[SiteController::class,'about'])->name('about');
Route::get('/contact',[SiteController::class,'contact'])->name('contact');

//Product
Route::group(['prefix' => 'products'], function () {
    Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('site.products.index');
    Route::get('/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('site.products.show');
    

});


//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.home');

    Route::get('/products',[ProductController::class,'index'])->name('products.index');
    Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
    Route::post('/products',[ProductController::class,'store'])->name('products.store');
    Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
    Route::patch('/products/{id}',[ProductController::class,'update'])->name('products.update');
    Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');
    Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('products.destroy');
    Route::get('/product/search',[ProductController::class,'seek'])->name('product.search');
    
});   

