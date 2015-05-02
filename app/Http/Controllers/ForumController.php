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
        $threads = ForumThreads::get();
        return view('forum.index')->with(array('threads' => $threads));
    }

    public function startDiscussion(ForumThreadRequest $request){

        $thread = ForumThreads::create(Input::all());
        $thread->created_by = User::find(Auth::id())->name;
        $thread->updated_by = User::find(Auth::id())->name;
        $thread->save();

        return Redirect::back();

    }

}
