<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LocaleMiddleware {

    protected $languages = ['en', 'sv'];

    public function __construct()
    {

    }

    public function handle($request, Closure $next)
    {
        if(Session::has('locale') && in_array(Session::get('locale'), $this->languages)) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }

}