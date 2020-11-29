<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_newController extends Controller
{
    //
    public function dashboard()
    {
        return view('Admin_new.dashboard');
    }
}
