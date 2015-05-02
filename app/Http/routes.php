<?php

use Illuminate\Support\Facades\Redirect;

Route::get('/', 'PagesController@index');

Route::get('/messages', 'MessagesController@index');
Route::get('/messages/read/{id}', 'MessagesController@read');
Route::get('/messages/new', 'MessagesController@newMessage');
Route::post('/messages/reply', 'MessagesController@reply');
Route::post('/messages/send', 'MessagesController@send');

Route::group(array('middleware' => 'auth'), function(){

    Route::get('/bank', 'BankController@index');
    Route::get('/burnerShop', 'BurnerShopController@index');

    Route::group(array('middleware' => 'isAdmin'), function(){
        Route::get('/admin', function(){
           return Redirect::to('/');
        });
    });

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);