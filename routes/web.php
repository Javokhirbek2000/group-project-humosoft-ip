<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/shop', function () {
    return view('pages.shop');
});
Route::get('/collection/{slug}', function ($slug) {
    return view('pages.collection', ['title' => $slug]);
});

Route::get('/product/{slug}', function () {
    return view('pages.product');
})->name("product");



//ADMIN
Route::get('/admin', function () {
    return view('pages.admin');
});
