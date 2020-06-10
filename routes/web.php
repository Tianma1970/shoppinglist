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

Route::get('/shoppinglists/{shoppinglist}/show', 'ShoppinglistController@show');
Route::get('/shoppinglists/create', 'ShoppinglistController@create');
Route::post('/shoppinglist/store', 'ShoppinglistController@store');
Route::post('shoppinglist/delete', 'ShoppinglistController@deleteMany');
Route::put('/shoppinglist/{shoppinglist}/update', 'ShoppinglistController@update');
Route::get('/shoppinglists/{shoppinglist}', 'ShoppinglistController@edit');

Route::post('/shoppingitem/delete', 'ShoppingitemController@deleteMany');
Route::get('/shoppingitems/create', 'ShoppingitemController@create');
Route::post('/shoppingitems/store', 'ShoppingitemController@store');
Route::put('/shoppingitem/{shoppingitem}/update', 'ShoppingitemController@update');
Route::get('/shoppingitems/{shoppingitem}/edit', 'ShoppingitemController@edit');
