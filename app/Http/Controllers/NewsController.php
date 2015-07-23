<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NewsController extends Controller {

    public function index()
    {
        $news = \App\News::orderBy('updated_at', 'desc')->orderBy('created_at', 'desc')->paginate(5);

        return view('news.index', array('news' => $news));
    }

    public function read($id)
    {
        $news = \App\News::find($id);

        return view('news.read', array('news' => $news));
    }

}