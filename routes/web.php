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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('buline')->group(function (){
   Route::get('/','BukangController@index')->name('beranda');
   Route::get('/friends','BukangController@showFriends')->name('friends');
   Route::get('/friends/profile','BukangController@showFriendsProfile')->name('friends.profile');
   Route::get('/profile','BukangController@showProfile')->name('profile');
});
