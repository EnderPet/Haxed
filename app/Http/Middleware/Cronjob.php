<?php namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cronjob {

    public function __construct()
    {

    }

    public function experience($level){
        $xp = 0;
        for($i=1; $i<$level; $i++){
            $xp += floor($i+300*pow(2, ($i/7)));
        }
        return floor($xp/4);
    }

    public function handle($request, Closure $next)
    {

        if(Auth::check()){
            $user = User::find(Auth::id());
            if($user->exp >= $user->max_exp){
                $user->level += 1;
                $user->max_exp = Cronjob::experience($user->level + 1);
                $user->save();
                return redirect($_SERVER['REQUEST_URI']);
            }
        }

        return $next($request);
    }

}
