<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class ForumController extends Controller {

    public function __construct(){
    }

    public function index(){
        return view('forum.index');
    }

}
