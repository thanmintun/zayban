<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('shop-item/{id}', [App\Http\Controllers\FrontController::class, 'ShopItem'])->name('shop.item');
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.index');