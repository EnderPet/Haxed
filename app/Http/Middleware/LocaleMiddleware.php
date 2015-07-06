<?php namespace App\Http\Middleware;

use Closure;

class LocaleMiddleware {

    protected $languages = ['en', 'sv'];

    public function __construct()
    {

    }

    public function handle($request, Closure $next)
    {
        if(!\Session::has('locale')) {
            Session:put('locale', Config::get('locale'));
        }

        app()->setLocale(\Session::get('locale'));

        return $request($next);
    }

}