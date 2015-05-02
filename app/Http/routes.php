<?php

Route::get('/', 'PagesController@index');

Route::group(array('middleware' => 'auth'), function(){

    Route::get('/bank', 'BankController@index');
    Route::get('/burnerShop', 'BurnerShopController@index');

    Route::group(array('middleware' => 'admin'), function(){
        Route::get('/admin', function(){
           return "Admin!123";
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