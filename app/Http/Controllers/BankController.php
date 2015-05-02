<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class BankController extends Controller {

    public function __construct(){
    }

    public function index(){
        return view('bank');
    }

}
