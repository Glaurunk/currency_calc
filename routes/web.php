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
    return view('layout');
});
// Routes for currencies
Route::get('/currencies', 'CurrencyController@index');
Route::post('/currencies', 'CurrencyController@add');
Route::delete('/currencies/{id}', 'CurrencyController@delete');

//Routes for ratios
Route::post('/ratios', 'RatioController@get_ratios');
Route::post('/ratios/set', 'RatioController@set_ratios');
