<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\users;

class AuthParth extends Controller
{
    //
    public function show()
    {
        return view('AuthReg');
    }
    public function register(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "email" => "required",
            "password" => "required"
        ]);
        $user = new users;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
    public function authenticate(Request $request)
    {
        $this->validate($request,[
            "email" => "required",
            "password" => "required"
        ]);
        $data = array(
            "email" => $request->email,
            "password" => $request->password
        );
        if(Auth::attempt($data))
        {
            echo "successful";
            return redirect('profile');
        }
        else
        {
            echo "PUTA";
        }
    }
    public function login()
    {
        return view('AuthLogin');
    }
    public function profile()
    {
        return view('profile');
    }
}