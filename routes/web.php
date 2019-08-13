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
Route::get('/vacancy', 'MainController@vacancy')->name('vacancy');
Route::get('/vacancy/career', function () {
    return view('vacancy.career');
});
Route::get('/vacancy/semantics', function () {
    return view('vacancy.semantic');
});
Route::get('/vacancy/scheme', function () {
    return view('vacancy.scheme');
});
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/services', 'MainController@services')->name('services');
Route::get('/reviews', 'MainController@reviews')->name('reviews');
Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/blog/article', 'MainController@article')->name('article');
Route::get('/partners', 'MainController@partners')->name('partners');