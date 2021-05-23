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
use App\Models\User;

Route::get('/', function () {
    return view('home.index');
})->name('home');

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

Route::get('/checkout', function () {
    return view('pages.checkout');
});

Route::get('/login', function () {
    $email = request()->get('email');
    $password = request()->get('password');
    if(Auth::attempt(['email' => $email, 'password' => $password], false))
        return back();
    return view('pages.login');
})->name("login");

Route::get('/logout', function () {
    //back()
    return redirect()->route('home');
})->name("logout");

Route::get('/register', function () {
    $user = new User();
    $user->name = request()->get('name');
    $user->email = request()->get('email');
    $user->password = request()->get('password');
    $user->save();
    Auth::login($user);
    return back();
    //return redirect()->route('home');
})->name("register");

Route::get('/profile', function () {
    return view('pages.profile');
})->middleware('auth')->name("profile");

//ADMIN
Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/admin/{slug}', function ($slug) {
    return view('pages.admin', ['slug' => $slug]);
})->name('admin-routes');
