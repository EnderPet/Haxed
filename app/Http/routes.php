<?php

use Illuminate\Support\Facades\Redirect;

Route::get('/', 'PagesController@index');

Route::get('/messages', 'MessagesController@index');

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

/*
Route::get('/artisan', function()
{
    Artisan::call('migrate:refresh');

    //
});
*/