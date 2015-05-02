<?php namespace App\Http\Controllers;

use App\ForumThreads;
use App\Http\Requests\ForumThreadRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ForumController extends Controller {

    public function __construct(){
    }

    public function index(){
        return view('forum.index');
    }

    public function startDiscussion(ForumThreadRequest $request){

        $thread = ForumThreads::create(Input::all());
        $thread->created_by = User::find(Auth::id())->name;
        $thread->updated_by = User::find(Auth::id())->name;
        $thread->save();

        return Redirect::back();

    }

}
