<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCont extends Controller
{
    //
    public function index()
    {
        return view('adminlaravel.index');
    }
    public function showadmin()
    {
        return view('admintemplate.index');
    }
}
