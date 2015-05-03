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

    }

}
