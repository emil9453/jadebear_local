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

// Get page about
Route::get('/about', 'MainController@about')->name('about');
// Get page portfolio
Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');
// Get page reviews
Route::get('/reviews', 'MainController@reviews')->name('reviews');
// Get page services
Route::get('/services', 'MainController@services')->name('services');
// Get page toPartners
Route::get('/toPartners', 'MainController@toPartners')->name('toPartners');
// Get page toInvestors
Route::get('/toInvestors', 'MainController@toInvestors')->name('toInvestors');
// Get page blog
Route::get('/blog', 'MainController@blog')->name('blog');

// Get page our Teams
Route::get('/ourTeam', 'AboutController@ourTeam')->name('ourTeam');
// Get page our history
Route::get('/ourHistory', 'AboutController@ourHistory')->name('ourHistory');
// Get page  vacancy
Route::get('/vacancy', 'AboutController@vacancy')->name('vacancy');
// Get page  vacancy career
Route::get('/vacancy/career', 'AboutController@vacancyCareer')->name('vacancyCareer');
// Get page  vacancy semantics
Route::get('/vacancy/semantics', 'AboutController@vacancySemantics')->name('vacancySemantics');
// Get page  vacancy scheme
Route::get('/vacancy/scheme', 'AboutController@vacancyScheme')->name('vacancyScheme');
// Get page contactDetails
Route::get('/contacts', 'AboutController@contacts')->name('contacts');