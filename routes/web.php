<?php

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

Route::get('/', function () {
    return view('Homepage');
});

Route::get('/product', function () {
    return view('Product_view');
});

Route::get('/product/{id}', [ProductController::class, 'show'])->where('n', '[0-9]+');
Route::get('/cart', function () {
    return view('Cart');
});


