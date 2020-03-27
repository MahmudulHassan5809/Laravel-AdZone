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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/category/ads/{slug}', 'HomeController@categoryAdds')->name('category_adds');
Route::get('/tag/ads/{name}', 'HomeController@tagAdds')->name('tag_adds');
Route::get('/user/ads/{id}', 'HomeController@userAdds')->name('user_adds');
Route::get('/condition/ads', 'HomeController@conditionAdds')->name('condition_adds');
Route::get('/price/range/ads', 'HomeController@priceRangeAdds')->name('price_range_adds');
Route::get('/search/ads', 'HomeController@searchAdds')->name('post_search');
Route::get('/help/support', 'HomeController@Support')->name('help_support');
Route::get('/about', 'HomeController@About')->name('about');

Route::prefix('users')->name('user.')->group(function(){
    Route::get('/userad','UserDetailsController@userAdd')->name('userdetails.useradd');
    Route::get('/save/favorite/{postid}','UserDetailsController@saveAsFavorite')->name('userdetails.save_as_favorite');
    Route::get('/favorite/ad','UserDetailsController@userFavorite')->name('userdetails.favoriteadd');
    Route::put('/change/password','UserDetailsController@changePassword')->name('userdetails.change_password');
    Route::get('/remove/favorite/{postid}','UserDetailsController@removeFavorite')->name('userdetails.removefavorite');

    Route::resource('/userdetails','UserDetailsController');


    Route::get('/ad/sold/{postid}','AddPostController@adSold')->name('userdetails.ad_sold');
    Route::resource('/addpost','AddPostController');

});




Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('/roles','AdminRoleController',['except' => ['show']]);
    Route::resource('/users','AdminUserController',['except' => ['show']]);
    Route::resource('/categories','AdminCategoryController');
    Route::get('/category/ads/{id}','AdminCategoryController@categoryAd')->name('category.ads');

    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('/ad/status/toggle/{id}','AdminController@statusToggle')->name('admin.status_toggle');
    Route::get('/admin/profile','AdminController@adminProfile')->name('admin.profile');
    Route::put('/admin/update/profile','AdminController@adminUpdateProfile')->name('admin.update.profile');
    Route::put('/admin/change/password','AdminController@adminChangePassword')->name('admin.change_password');
    Route::get('/all/adds','AdminController@allAds')->name('admin.all_ads');

});
