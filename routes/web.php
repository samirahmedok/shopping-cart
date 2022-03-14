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


//Auth
Auth::routes();

Route::resource('/', 'App\Http\Controllers\ProductController');

Route::get('addToCart/{product}','App\Http\Controllers\ProductController@addToCart')->name('add.cart');

Route::get('showCart','App\Http\Controllers\ProductController@showCart')->name('add.show');

Route::get('checkout/{amount}','App\Http\Controllers\ProductController@checkout')->name('checkout.cart')->middleware('auth');

Route::post('charge','App\Http\Controllers\ProductController@charge')->name('cart.charge');

Route::delete('showCart/{product}','App\Http\Controllers\ProductController@destroy')->name('product.remove');

Route::put('showCart/{product}','App\Http\Controllers\ProductController@update')->name('product.update');

