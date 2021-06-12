<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


Route::get('/', function () {
	return view('Front.home');
});


require __DIR__ . '/auth.php';


Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});


Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();
	dd($user);
    // $user->token
});



Route::name('admin.')->prefix('admin')->namespace('Admin')->middleware('auth', 'admin')->group(function () {

	Route::get('dashboard', 'DashboardController@index')->name('dashboard');

	Route::get('/locations', 'DashboardController@location')->name('locations');
	Route::get('/add-location', 'DashboardController@addLocation')->name('location_add');
	Route::post('/save-location', 'DashboardController@storeLoc')->name('save_location');
	Route::get('/loc-edit/{location?}{slug?}','DashboardController@locationEdit')->name('location_edit');

	
	Route::get('/eventType', 'DashboardController@eventType')->name('eventType');
	Route::get('/veneues', 'VeneueController@veneues')->name('veneues');
	Route::get('/add-veneue', 'VeneueController@veneueAdd')->name('venue.add');
	Route::post('/store-veneue', 'VeneueController@veneueStore')->name('veneue_store');


	Route::get('/polymorhpic-index','PolymorphicController@index')->name('poly.index');
	Route::get('/post-add','PolymorphicController@postAdd')->name('post.add');
	Route::post('post-store','PolymorphicController@postStore')->name('post.store');
	Route::post('post-comment-store/{id?}','PolymorphicController@postCommentStore')->name('comment.store');

	Route::get('/video-add','PolymorphicController@videoAdd')->name('video.add');
	Route::post('/video-store','PolymorphicController@videoStore')->name('video.store');
	//Route::video('video-comment-store/{id?}','PolymorphicController@videoCommentStore')->name('comment.video.store');

});
