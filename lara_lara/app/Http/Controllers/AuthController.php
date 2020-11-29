<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function index()
    {
        return view('custom_reg');
    }
    public function register(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "email" => "required",
            "password" => "required",
        ]);
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
    }
    public function showlogin()
    {
        return view('custom_login');
    }
    public function profile()
    {
        return view('view.profile');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('custom_login');
    }
    public function auth(Request $request)
    {
        $this->validate($request,[
            "email" => "required",
            "password" => "required"
        ]);
        $data = array(
            "email" => $request->email,
            "password" => $request->password
        );
        // print_r($data);
        // die();
        $a = Auth::attempt($data);
            if($a)
            {
                echo "Successful";
                return redirect('profile');
            }
            else
            {
                echo "Bad";
            }
        
    }
}








