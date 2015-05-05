<?php

use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');

Route::group(array('middleware' => 'auth'), function(){

    Route::get('/bank', 'BankController@index');
    Route::get('/blackMarket', 'BlackMarketController@index');
    Route::get('/blackMarket/burner/{id}', 'BlackMarketController@buyBurner');
    Route::get('/merchant', 'MerchantController@index');
    Route::get('/messages', 'MessagesController@index');
    Route::get('/messages/read/{id}', 'MessagesController@read');
    Route::get('/messages/new', 'MessagesController@newMessage');
    Route::get('/forum', 'ForumController@index');
    Route::get('/forum/view/{id}', 'ForumController@view');
    Route::get('/forum/mina-diskussioner', 'ForumController@myDiscussions');
    Route::get('/forum/channel/{channel}', 'ForumController@channel');
    Route::get('/forum/search/{search}', 'ForumController@search');
    Route::get('/profile', 'ProfileController@profile');
    Route::get('/profile/show/{id}', 'ProfileController@show');

    Route::post('/messages/reply', 'MessagesController@reply');
    Route::post('/messages/send', 'MessagesController@send');
    Route::post('/forum/start-discussion', 'ForumController@startDiscussion');
    Route::post('/forum/reply', 'ForumController@reply');
    Route::post('/forum/', 'ForumController@searchPost');

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