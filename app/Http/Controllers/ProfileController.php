<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller {

    public function profile()
    {
        $profiledata = User::find(Auth::id());
        return view('profile.profile', array('profiledata' => $profiledata));
    }

    public function show($id)
    {
        $profiledata = User::find($id);
        return view('profile.profile', array('profiledata' => $profiledata));
    }

    public function edit()
    {
        return view('profile.edit');
    }

    public function update()
    {

    }

}