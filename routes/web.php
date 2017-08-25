<?php

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/', 'HomeController@index');
Auth::routes();

Route::group(['prefix' => 'provinces'], function () {
    Route::get('/', ['as' => 'provinceList', 'uses' => 'PagesController@provinces']);
    Route::get('/{name}', ['as' => 'provincePF', 'uses' => 'PagesController@provincePF']);
    Route::get('{name}/Hotels', ['as' => 'hotels', 'uses' => 'PagesController@hotelsList']);
    Route::get('{name}/Hotels/{name1}', ['as' => 'hotelPF', 'uses' => 'PagesController@hotelPF']);
    Route::get('{name}/Restaurants', ['as' => 'restaurants', 'uses' => 'PagesController@restaurants']);
    Route::get('{name}/Activities', ['as' => 'activities', 'uses' => 'PagesController@activities']);
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/hotels', ['as' => 'hotelList', 'uses' => 'PagesController@hotelsList']);
    Route::post('/hotels', ['as' => 'hotelList', 'uses' => 'PagesController@hotels']);
});

Route::group(['prefix' => 'services'], function () {
    Route::get('/hotels', ['as' => 'hotelList', 'uses' => 'PagesController@hotelsList']);
    Route::post('/hotels', ['as' => 'hotelList', 'uses' => 'PagesController@hotels']);
});

Route::group(['prefix' => '/user', 'middleware' => ['IsUser', 'auth']], function () {
    Route::get('profile/{id}', ['as' => 'user.profile', 'uses' => 'UserController@showProfile']);
    Route::post('profile/{id}', ['as' => 'user.update', 'uses' => 'UserController@updateProfile']);
});

Route::group(['prefix' => '/admin', 'middleware' => ['IsAdmin', 'auth']], function () {
    Route::get('/', ['as' => 'admin', 'uses' => 'PagesController@showAdmin']);
    Route::get('/user_list', ['as' => 'userList', 'uses' => 'AdminController@userList']);
    Route::get('/user_list/{id}', ['as' => 'block', 'uses' => 'AdminController@blockUser']);
    Route::get('/user_block', ['as' => 'userBlock', 'uses' => 'AdminController@userBlock']);
    Route::get('/user_block/{id}', ['as' => 'unblock', 'uses' => 'AdminController@unblockUser']);
    Route::get('/province_list', ['as' => 'provinceShowList', 'uses' => 'AdminController@provinceList']);
    Route::get('/province_add', ['as' => 'provinceGetAdd', 'uses' => 'AdminController@provinceGetAdd']);
    Route::post('/province_add', ['as' => 'provincePostAdd', 'uses' => 'AdminController@provincePostAdd']);
    Route::get('/province_delete/{id}', ['as' => 'provinceDelete', 'uses' => 'AdminController@provinceDelete']);
    Route::get('/province_edit/{id}', ['as' => 'provinceGetEdit', 'uses' => 'AdminController@provinceGetEdit']);
    Route::post('/province_edit/{id}', ['as' => 'provincePostEdit', 'uses' => 'AdminController@provincePostEdit']);
});

Route::group(['prefix' => '/action', 'middleware' => ['IsUser', 'auth']], function () {
    Route::get('/request', ['as' => 'requestGet', 'uses' => 'PagesController@requestGet']);
    Route::post('/request', ['as' => 'requestPost', 'uses' => 'PagesController@requestPost']);
    Route::get('/request/{id}/edit', ['as' => 'requestEditGet', 'uses' => 'PagesController@requestEditGet']);
    Route::post('/request/{id}/edit', ['as' => 'requestEditPost', 'uses' => 'PagesController@requestEditPost']);
    Route::get('/request/{id}/delete', ['as' => 'requestDelete', 'uses' => 'PagesController@requestDelete']);
});
