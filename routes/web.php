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
Route::get('/partners/perspective', 'MainController@partners_perspective')->name('partners_perspective');
Route::get('/partners/why', 'MainController@partners_why')->name('partners_why');
Route::get('/partners/scheme', 'MainController@partners_scheme')->name('partners_scheme');
Route::get('/partners/relationship', 'MainController@partners_relationship')->name('partners_relationship');
Route::get('/partners/investment', 'MainController@partners_investment')->name('partners_investment');
Route::get('/partners/offices', 'MainController@partners_offices')->name('partners_offices');
Route::get('/partners/thanks', 'MainController@partners_thanks')->name('partners_thanks');
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

    Route::resource('relationship_histories', 'Admin\RelationshipHistoriesController');
    Route::post('relationship_histories_mass_destroy', ['uses' => 'Admin\RelationshipHistoriesController@massDestroy', 'as' => 'relationship_histories.mass_destroy']);
    Route::post('relationship_histories_restore/{id}', ['uses' => 'Admin\RelationshipHistoriesController@restore', 'as' => 'relationship_histories.restore']);
    Route::delete('relationship_histories_perma_del/{id}', ['uses' => 'Admin\RelationshipHistoriesController@perma_del', 'as' => 'relationship_histories.perma_del']);
    Route::resource('special_offers', 'Admin\SpecialOffersController');
    Route::post('special_offers_mass_destroy', ['uses' => 'Admin\SpecialOffersController@massDestroy', 'as' => 'special_offers.mass_destroy']);
    Route::post('special_offers_restore/{id}', ['uses' => 'Admin\SpecialOffersController@restore', 'as' => 'special_offers.restore']);
    Route::delete('special_offers_perma_del/{id}', ['uses' => 'Admin\SpecialOffersController@perma_del', 'as' => 'special_offers.perma_del']);
    Route::resource('politics', 'Admin\PoliticsController');
    Route::post('politics_mass_destroy', ['uses' => 'Admin\PoliticsController@massDestroy', 'as' => 'politics.mass_destroy']);
    Route::post('politics_restore/{id}', ['uses' => 'Admin\PoliticsController@restore', 'as' => 'politics.restore']);
    Route::delete('politics_perma_del/{id}', ['uses' => 'Admin\PoliticsController@perma_del', 'as' => 'politics.perma_del']);
    Route::resource('media', 'Admin\MediaController');
    Route::post('media_mass_destroy', ['uses' => 'Admin\MediaController@massDestroy', 'as' => 'media.mass_destroy']);
    Route::post('media_restore/{id}', ['uses' => 'Admin\MediaController@restore', 'as' => 'media.restore']);
    Route::delete('media_perma_del/{id}', ['uses' => 'Admin\MediaController@perma_del', 'as' => 'media.perma_del']);
    Route::resource('work_schemas', 'Admin\WorkSchemasController');
    Route::post('work_schemas_mass_destroy', ['uses' => 'Admin\WorkSchemasController@massDestroy', 'as' => 'work_schemas.mass_destroy']);
    Route::post('work_schemas_restore/{id}', ['uses' => 'Admin\WorkSchemasController@restore', 'as' => 'work_schemas.restore']);
    Route::delete('work_schemas_perma_del/{id}', ['uses' => 'Admin\WorkSchemasController@perma_del', 'as' => 'work_schemas.perma_del']);
    Route::resource('faqs', 'Admin\FaqsController');
    Route::post('faqs_mass_destroy', ['uses' => 'Admin\FaqsController@massDestroy', 'as' => 'faqs.mass_destroy']);
    Route::post('faqs_restore/{id}', ['uses' => 'Admin\FaqsController@restore', 'as' => 'faqs.restore']);
    Route::delete('faqs_perma_del/{id}', ['uses' => 'Admin\FaqsController@perma_del', 'as' => 'faqs.perma_del']);
    Route::resource('reviews', 'Admin\ReviewsController');
    Route::post('reviews_mass_destroy', ['uses' => 'Admin\ReviewsController@massDestroy', 'as' => 'reviews.mass_destroy']);
    Route::post('reviews_restore/{id}', ['uses' => 'Admin\ReviewsController@restore', 'as' => 'reviews.restore']);
    Route::delete('reviews_perma_del/{id}', ['uses' => 'Admin\ReviewsController@perma_del', 'as' => 'reviews.perma_del']);
    Route::resource('developments', 'Admin\DevelopmentsController');
    Route::post('developments_mass_destroy', ['uses' => 'Admin\DevelopmentsController@massDestroy', 'as' => 'developments.mass_destroy']);
    Route::post('developments_restore/{id}', ['uses' => 'Admin\DevelopmentsController@restore', 'as' => 'developments.restore']);
    Route::delete('developments_perma_del/{id}', ['uses' => 'Admin\DevelopmentsController@perma_del', 'as' => 'developments.perma_del']);
    Route::resource('why_exactly_wes', 'Admin\WhyExactlyWesController');
    Route::post('why_exactly_wes_mass_destroy', ['uses' => 'Admin\WhyExactlyWesController@massDestroy', 'as' => 'why_exactly_wes.mass_destroy']);
    Route::post('why_exactly_wes_restore/{id}', ['uses' => 'Admin\WhyExactlyWesController@restore', 'as' => 'why_exactly_wes.restore']);
    Route::delete('why_exactly_wes_perma_del/{id}', ['uses' => 'Admin\WhyExactlyWesController@perma_del', 'as' => 'why_exactly_wes.perma_del']);

});
