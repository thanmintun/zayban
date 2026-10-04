<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('shop-item/{id}', [App\Http\Controllers\FrontController::class, 'ShopItem'])->name('shop.item');
Route::get('items-category/{category_id}', [App\Http\Controllers\FrontController::class, 'ItemsCategory'])->name('items.category');

// Route Group 
Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
Route::resource('items', App\Http\Controllers\Admin\ItemController::class);
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
