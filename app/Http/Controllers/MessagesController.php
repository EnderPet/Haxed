<?php namespace App\Http\Controllers;

class MessagesController extends Controller {

    public function __construct(){
        if(Auth::check()){
            View::share('user', Auth::user());
        }
    }

    public function index()
    {
        return view('messages.index');
    }

}
