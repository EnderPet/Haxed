<?php namespace App\Http\Controllers;

class MessagesController extends Controller {

    public function index()
    {
        $mess = '';

        return view('messages.index');
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
