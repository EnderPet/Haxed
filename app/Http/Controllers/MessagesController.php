<?php namespace App\Http\Controllers;

class MessagesController extends Controller {

    public function index()
    {
        $mess = Messages::where('tuid', '=', Auth::id())->orderBy('seen', 'asc')->orderBy('sentat', 'desc')->get();

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
