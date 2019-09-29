<?php

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test_demo.test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/list-product', function() {
	return view('products.list_product');
});

Route::get('/detail-product', function() {
	return view('products.detail_product');
});
