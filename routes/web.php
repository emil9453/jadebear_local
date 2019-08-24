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
Route::get('/partners', 'MainController@partners')->name('partners');
// Get page toInvestors
Route::get('/toInvestors', 'MainController@toInvestors')->name('toInvestors');
// Get page blog
Route::get('/blog', 'MainController@blog')->name('blog');
// Get page article
Route::get('/article', 'MainController@article')->name('article');

Route::get('/specialOffer', 'MainController@specialOffer')->name('specialOffer');

Route::get('/relationshipHistory', 'MainController@relationshipHistory')->name('relationshipHistory');

Route::get('/media', 'MainController@media')->name('media');

Route::get('/politics', 'MainController@politics')->name('politics');

Route::get('/faq', 'MainController@faq')->name('faq');


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





// Admin

//Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function ()
{
    Route::get('/home', 'HomeController@index');
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('team_members', 'Admin\TeamMembersController');
    Route::post('team_members_mass_destroy', ['uses' => 'Admin\TeamMembersController@massDestroy', 'as' => 'team_members.mass_destroy']);
    Route::post('team_members_restore/{id}', ['uses' => 'Admin\TeamMembersController@restore', 'as' => 'team_members.restore']);
    Route::delete('team_members_perma_del/{id}', ['uses' => 'Admin\TeamMembersController@perma_del', 'as' => 'team_members.perma_del']);
});
