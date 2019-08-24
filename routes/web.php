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

Route::get('/vacancy/career', 'MainController@vacancy_career')->name('vacancy_career');
Route::get('/vacancy/semantics', 'MainController@vacancy_semantics')->name('vacancy_semantics');
Route::get('/vacancy/scheme', 'MainController@vacancy_scheme')->name('vacancy_scheme');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');

Route::get('/services', 'MainController@services')->name('services');
Route::get('/reviews', 'MainController@reviews')->name('reviews');
Route::get('/blog', 'MainController@blog')->name('blog');
Route::get('/blog/article', 'MainController@article')->name('article');
Route::get('/service', 'MainController@service')->name('service');

Route::get('/partners', 'MainController@partners')->name('partners');
Route::get('/partners/perspective', 'MainController@partners_perspective')->name('partners_perspective');
Route::get('/partners/why', 'MainController@partners_why')->name('partners_why');
Route::get('/partners/scheme', 'MainController@partners_scheme')->name('partners_scheme');
Route::get('/partners/relationship', 'MainController@partners_relationship')->name('partners_relationship');
Route::get('/partners/investment', 'MainController@partners_investment')->name('partners_investment');
Route::get('/partners/offices', 'MainController@partners_offices')->name('partners_offices');
Route::get('/partners/thanks', 'MainController@partners_thanks')->name('partners_thanks');