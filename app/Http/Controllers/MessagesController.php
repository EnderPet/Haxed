<?php namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller {

    public function index()
    {
        $mess = Messages::where('tuid', '=', Auth::id())->orderBy('seen', 'asc')->orderBy('sentat', 'desc')->paginate(10);

        return view('messages.index', array('mess' => $mess));
    }

    public function read($id)
    {
        $mess = DB::table(DB::raw('messages as m inner join (SELECT id, name FROM users as touser) as u on u.id=m.tuid left join (SELECT id as id2, name as fruser FROM users) as u2 on u2.id2=m.fuid'))
            ->where('m.id', '=', $id)
            ->first();

        $update = Messages::where('id', '=', $id);
        $update->update(array('seen' => 1));

        $date = explode(' ', $mess->sentat);
        $mess->date = array('date' => $date[0], 'time' => $date[1]);

        return view('messages.read', array('mess' => $mess));
    }

    public function reply()
    {
        $reply = new Messages;
        $reply->tuid = Input::get('tuid');
        $reply->fuid = Input::get('fuid');
        $reply->title = Input::get('title');
        $reply->message = Input::get('message');
        $reply->sentat = date('Y-m-d H:i:s');
        $reply->seen = 0;

        if($reply->save()) {
            return Redirect::to('/messages/')->withSuccess('Message Sent.');
        } else {
            return Redirect::back()->withInput()->with('Errors', 'Message could not be sent.');
        }
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

        if(Input::get('title') == null || Input::get('title') == '') {
            return Redirect::back()->withInput()->with('Errors', 'You can to specify a subject.');
        }

        $new = new Messages;
        $new->tuid = Input::get('tuid');
        $new->fuid = Auth::id();
        $new->title = Input::get('title');
        $new->message = Input::get('message');
        $new->sentat = date('Y-m-d H:i:s');
        $new->seen = 0;

        if($new->save()) {
            return Redirect::to('/messages/')->withSuccess('Message Sent.');
        } else {
            return Redirect::back()->withInput()->with('Errors', 'Could not send message to user.');
        }
    }

}
