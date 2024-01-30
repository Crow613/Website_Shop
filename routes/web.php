<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Product\ProductController;

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

Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/about',[SiteController::class,'about'])->name('about');

Route::group(['prefix'=> 'products'], function () {
Route::get('/',[ProductController::class,'siteProducts'])->name('siteProducts');
Route::get('/show',[ProductController::class,'siteProductsShow'])->name('siteProductsShow');
Route::get('/search',[ProductController::class,'siteProductsSeek'])->name('siteProductsSearch');
});
