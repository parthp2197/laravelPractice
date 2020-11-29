<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class apiController extends Controller
{
    //
    public function get_name()
    {
        
        $data = file_get_contents('http://country.io/names.json');
        // print_r($data);
        // echo "<pre>";
        print_r(json_encode($data));
    }
    public function get_users($token)
    {
        if($token == 'Thanos')
        {
            $data = user::all()->toarray();
            // echo "<pre>";
            // print_r($data);
            print_r(json_encode($data)); 
        }

    }
    public function store(Request $req)
    {
        $user = new user;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->google_id = $req->google_id;
        $data = $user->save();
        if($data)
        {
            $msg = ['response_code' => 200];
            print_r(json_encode($msg));
        }
    }
}