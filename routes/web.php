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
    return view('pages.home');
});

Auth::routes();

// Pages
Route::get('/home', 'PageController@home')->name('home');
Route::get('/about', 'PageController@defaultpage')->name('about');
Route::get('/contact', 'PageController@defaultpage')->name('contact');
Route::get('/network', 'PageController@defaultpage')->name('network');
Route::get('/profile', 'PageController@defaultpage')->name('profile');

// Card
Route::get('/cards/all', 'CardController@index')->name('cards');
Route::get('/card/{card}', 'CardController@show')->name('card.show');
