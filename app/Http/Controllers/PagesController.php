<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PagesController extends Controller {

	public function __construct(){
	}

    public function index(){
        if(Auth::check()) {
            return Redirect::to('/news');
        }

        return view('index');
    }

}