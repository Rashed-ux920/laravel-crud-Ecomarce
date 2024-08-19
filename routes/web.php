<?php

use App\Http\Controllers\directioncontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [directioncontroller::class, ' index'])->name('index');

Route::get('/shop',[directioncontroller::class, 'shop'])->name('shop');



Route::get('/shop/cart',[]);
