<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    public function profile()
    {
        $user = User::find(Auth::id());
        return view('profile.profile', array('user' => $user));
    }

    public function show($id)
    {
        return view('profile.profile');
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update()
    {

    }

}