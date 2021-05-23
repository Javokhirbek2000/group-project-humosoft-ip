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
use App\Models\Product;
use App\Models\Collection;

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
Route::get('/collection/{collection}', function (Collection $collection) {
    return view('pages.collection', compact('collection'));
})->name("collection");

Route::get('/search', function () {
	$search = request()->get('search');
	$results = App\Models\Product::where('name', 'LIKE', '%' . $search. '%')->get();
    return view('pages.search_results', compact('search', 'results'));
})->name('search');

Route::get('/product/{product}', function (Product $product) {
    return view('pages.product', ['product' => $product]);
})->name("product");



//ADMIN
Route::get('/admin', function () {
    return view('pages.admin');
});
