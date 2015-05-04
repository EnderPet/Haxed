<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\View;

class BankController extends Controller {

    public function __construct(){
    }

    public function index(){
        $users = User::get();
        return view('bank.index')->with(array('users' => $users));
    }

}
