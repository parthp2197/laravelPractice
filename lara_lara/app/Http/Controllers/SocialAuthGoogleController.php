<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Socialite;
use Auth;
use Exception;

class SocialAuthGoogleController extends Controller
{
    //
    public function showpage()
    {
        return view('login');
    }
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callback()
    {
        try
        {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email',$googleUser->email)->first();
            if($existUser)
            {
                Auth::loginUsingId($existUser->id);
            }
            else
            {
                $user = new User;
                $user->email = $googleUser->email;
                $user->name = $googleUser->name;
                $user->google_id = $googleUser->id;
                $user->password = md5(rand(1,10000));
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/profile');
        }
        catch(Exception $e)
        {
            return 'error';
        }

    }
}