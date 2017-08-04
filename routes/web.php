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

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::get( '/', 'HomeController@index' );
Auth::routes();

Route::get( '/user/profile/{id}', 'PagesController@showProfile' )->name('user.profile');
Route::post( '/user/profile/{id}', [ 'as' => 'user.update', 'uses' => 'UserController@updateProfile' ] );

Route::get( '/provinces', 'PagesController@provinces' );
Route::get( '/provinces/{name}', [ 'as' => 'provincePF', 'uses' => 'PagesController@provincePF' ] );
Route::get('/admin', 'PagesController@showAdmin')->name('admin');
Route::get('/admin/user_list','AdminController@userList');