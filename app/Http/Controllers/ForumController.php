<?php namespace App\Http\Controllers;

use App\ForumChannels;
use App\ForumReplies;
use App\ForumThreads;
use App\Http\Requests\ForumReplyRequest;
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
        $threads = ForumThreads::orderBy('updated_at', 'DESC')->paginate(20);
        $channels = ForumChannels::get();
        return view('forum.index')->with(array('threads' => $threads, 'channels' => $channels));
    }

    public function channel($channel){
        $channel = ForumChannels::where('name', '=', $channel)->first();
        $threads = ForumThreads::where('channel', '=', $channel->id)->orderBy('updated_at', 'DESC')->paginate(20);
        $channels = ForumChannels::get();
        return view('forum.index')->with(array('threads' => $threads, 'channels' => $channels));
    }

    public function myDiscussions(){
        $threads = ForumThreads::where('created_by', '=', Auth::id())->orderBy('updated_at', 'DESC')->paginate(20);
        $channels = ForumChannels::get();
        return view('forum.index')->with(array('threads' => $threads, 'channels' => $channels));
    }

    public function startDiscussion(ForumThreadRequest $request){

        $thread = ForumThreads::create(Input::all());
        $thread->created_by = Auth::id();
        $thread->updated_by = Auth::id();
        $thread->save();

        return Redirect::back();

    }

    public function search($keyword){
        $threads = ForumThreads::where('title', 'LIKE', '%' . $keyword . '%')->orWhere('content', 'LIKE', '%' . $keyword . '%')->orderBy('updated_at', 'DESC')->paginate(1);
        $channels = ForumChannels::get();
        return view('forum.index')->with(array('threads' => $threads, 'channels' => $channels));
    }

    public function searchPost(){
        return Redirect::to('/forum/search/' . Input::get('search'));
    }

    public function view($id){

        preg_match("/[^-]+$/", $id, $matches);
        $id = $matches[0];

        $thread = ForumThreads::find($id);
        $channels = ForumChannels::get();
        $replies = ForumReplies::where('forum_threads_id', '=', $id)->paginate(10);
        return view('forum.view')->with(array('thread' => $thread, 'channels' => $channels, 'replies' => $replies));
    }

    public function reply(ForumReplyRequest $request){
        $reply = new ForumReplies();
        $reply->forum_threads_id = Input::get('thread_id');
        $reply->content = Input::get('content');
        $reply->created_by = Auth::id();
        $reply->save();

        return Redirect::back();
    }

}
