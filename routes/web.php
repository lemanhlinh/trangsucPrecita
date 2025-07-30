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
    return view('web.home');
});

Route::get('danh-muc', function () {
    return view('web.product.cat');
});
Route::get('chi-tiet-san-pham', function () {
    return view('web.product.detail');
});
Route::get('blog', function () {
    return view('web.article.home');
});
Route::get('chi-tiet-blog', function () {
    return view('web.article.detail');
});

Route::get('store', function () {
    return view('web.store');
});

Route::get('gio-hang', function () {
    return view('web.product.cart');
});
