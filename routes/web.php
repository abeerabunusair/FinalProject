<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\shopeController;
use App\Http\Controllers\websiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//prefix كل الروابط الذ في المجموعة لازم تحتوي على admin

Route::prefix('admin')->name('admin.')->middleware('check-user')->group(function(){
    Route::get('/',[AdminController::class,'index'])->name('index');

    Route::resource('products',ProductsController::class);//admin.products.index (default)
    Route::resource('posts',PostsController::class);//admin.posts.index (default)
    Route::resource('categories',CategoryController::class);
    Route::resource('about',AboutController::class);

});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('website');
// Route::get('/',function(){
 //return bcrypt(123);  ارجاع  كلمة السر مشفرة
//  return view('welcome');
//  })->name('website');


Route::get('/website',[websiteController::class,'index']);
Route::get('/shop',[shopeController::class,'index']);
Route::get('/blog',[blogController::class,'index']);



Route::middleware('check-user')->group(function(){
    Route::resource('contact',contactController::class);
});



