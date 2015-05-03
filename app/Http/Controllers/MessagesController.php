<?php namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MessagesController extends Controller {

    public function index()
    {
        $mess = Messages::where('tuid', '=', Auth::id())->orderBy('seen', 'asc')->orderBy('sentat', 'desc')->paginate(10);

        return view('messages.index', array('mess' => $mess));
    }

    public function read()
    {
        return view('messages.read');
    }

    public function reply()
    {

    }

    public function newMessage()
    {
        return view('messages.new');
    }

    public function send()
    {
        if(Input::get('tuid') == Auth::id()) {
            return Redirect::back()->withInput()->with('Errors', 'You cannot send a messages to yourself.');
        }

        if(Input::get('title') == null || Input::get('title') == '' || isEmpty(Input::get('title'))) {
            return Redirect::back()->withInput()->with('Errors', 'You can to specify a subject.');
        }

        $new = new Messages;
        $new->tuid = Input::get('tuid');
        $new->fuid = Auth::id();
        $new->title = Input::get('title');
        $new->messages = Input::get('message');
        $new->sentat = date('Y-m-d H:i:s');
        $new->seen = 0;

        if($new->save()) {
            return Redirect::to('/messages/')->withSuccess('Message Sent.');
        } else {
            return Redirect::back()->withInput()->with('Errors', 'Could not send message to user.');
        }
    }

}
