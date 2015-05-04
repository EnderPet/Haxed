<?php namespace App\Http\Controllers;

use App\Burner;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class BlackMarketController extends Controller {

    public function __construct(){
    }

    public function index(){
        $burners = Burner::where('id', '>', '0')->where('premium', '=', '0')->orderBy('price', 'DESC')->get();
        $premiumBurners = Burner::where('id', '>', '0')->where('premium', '=', '1')->orderBy('price', 'DESC')->get();
        return view('blackmarket.index')->with(array('burners' => $burners, 'premiumBurners' => $premiumBurners));
    }

    public function buyBurner($id){
        $user = User::find(Auth::id());
        $burner = Burner::find($id);

        if($burner->id != $user->burner_id){
            if($burner->price < $user->money){
                if($burner->premium == 1){
                    if($user->premium_1 == 0){
                        return Redirect::back()->with(array('burnerShopFailed' => 'Du måste ha premium för denna brännare.'));
                    }
                }
                $user->money -= $burner->price;
                $user->burner_id = $burner->id;
                $user->save();
                return Redirect::back()->with(array('burnerShopSuccess' => 'Köpet lyckades!'));
            }
            return Redirect::back()->with(array('burnerShopFailed' => 'Du har inte råd med denna brännare.'));
        }
        return Redirect::back()->with(array('burnerShopFailed' => 'Du har redan denna brännare.'));

    }

}