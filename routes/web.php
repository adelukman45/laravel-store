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

Route::get('/', 'UserController@index');
Route::get('/product/{product}', 'UserController@product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/list', 'UserController@list')->name('user.account.list');
Route::resource('user', 'UserController');
Route::resource('account', 'AccountController');
Route::resource('product', 'ProductController');
Route::resource('category', 'CategoryController');
