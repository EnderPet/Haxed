<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class IsAdmin {

    public function __construct()
    {

    }

    public function handle($request, Closure $next)
    {

        if(Auth::user()->level < 1){
            return Redirect::to('/');
        }

        return $next($request);
    }

}
