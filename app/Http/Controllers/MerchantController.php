<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class MerchantController extends Controller {

    public function __construct(){
    }

    public function index(){
        return view('merchant');
    }

}