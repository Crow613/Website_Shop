<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Products\ProductController;

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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/user', [UserController::class,'index'])->name('user');
    Route::get('/products',[SiteController::class,'products'])->name('siteProducts');
    Route::get('/show/{id}',[SiteController::class,'productShow'])->name('siteProductShow');
    Route::post('/product/search',[SiteController::class,'productsSearch'])->name('siteProductSearch');
    Route::get('/user/help',[UserController::class,'chatHelp'])->name('chatHelp');

Route::group(['prefix'=> 'admin','middleware'=> ['admin']], function () {
     
     Route::get('/',[AdminController::class, 'index'])->name('adminHome');
     Route::patch('/edit',[AdminController::class,'update'])->name('adminEditPage');
     Route::delete('/delete',[AdminController::class,'destroy'])->name('adminDeletePage');
     Route::get('/chat',[AdminController::class,'services'])->name('adminChat');

     Route::group(['prefix'=> 'users'], function () {
        Route::get('/',[adminController::class,'users'])->name('users');
     });

     Route::group(['prefix'=> 'products'], function () {
          Route::get('/',[AdminController::class,'products'])->name('adminProducts');
          Route::get('/show/{id}',[AdminController::class,'productShow'])->name('adminProductShow');
          Route::get('/edit/{id}',[AdminController::class,'productEdit'])->name('adminProductEdit');

          Route::get('/create',[AdminController::class,'productCreatePage'])->name('productCreatePage');
          Route::get('/search',[AdminController::class,'productSearch'])->name('adminProductSearch');
          Route::post('/create',[ProductController::class,'create'])->name('productCreate');
          Route::patch('/update/{id}',[ProductController::class,'update'])->name('productUpdate');
          Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('productDelete');
     });

});

});


require __DIR__.'/auth.php';
