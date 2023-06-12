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
    return view('Liste des produits');
});

Route::get('/product/{id}', function () {
    return view('Fiche du produit {id}');
});

Route::get('/cart', function () {
    return view('Panier');
});
