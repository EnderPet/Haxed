<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BankController extends Controller {

    public function __construct(){
        if(Auth::check()){
            View::share('user', Auth::user());
        }
    }

    public function index(){
        return view('bank');
    }

}
