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
    return view('welcome');
});

Route::resource('/shoppinglists', 'ShoppinglistController');
Route::get('/shoppinglists/create', 'ShoppinglistController@create');
Route::post('/shoppinglist/store', 'ShoppinglistController@store');

Route::get('/shoppingitems/create', 'ShoppingitemController@create');
Route::post('/shoppingitems/store', 'ShoppingitemController@store');
