<?php

use Illuminate\Support\Facades\Redirect;
use App\User;

Route::get('/', 'PagesController@index');

Route::group(array('middleware' => 'auth'), function(){

    Route::get('/bank', 'BankController@index');
    Route::get('/burnerShop', 'BurnerShopController@index');
    Route::get('/messages', 'MessagesController@index');
    Route::get('/messages/read/{id}', 'MessagesController@read');
    Route::get('/messages/new', 'MessagesController@newMessage');
    Route::get('/forum', 'ForumController@index');

    Route::post('/messages/reply', 'MessagesController@reply');
    Route::post('/messages/send', 'MessagesController@send');

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

Route::get('/messages/searchusers', function() {
    $test = User::get();
    $in = array();

    foreach($test as $t) {
        $in[] = array('label' => $t->name, 'id' => $t->id);
    }

    return Response::json($in);
});

//test