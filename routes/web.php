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
Route::get('/about', 'MainController@about')->name('about');
Route::get('/our-team', 'MainController@our_team')->name('our_team');
Route::get('/our-history', 'MainController@our_history')->name('our_history');