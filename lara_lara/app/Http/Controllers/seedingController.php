<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seeding as thanos;

class seedingController extends Controller
{
    //
    public function showSeeding()
    {
        $data = thanos::paginate(15);
        // echo "<pre>";
        // print_r($data);
        return view('paginate')->with('data',$data);
    }
    public function dataTable()
    {
        $data = thanos::all();
        $count = count($data);
        return view('jqueryDataTable')->with('data',$data)->with('count',$count);
    }
    public function testEach()
    {
        $data = thanos::paginate(15);
        return view('showSeeding')->with('data',$data);
    }
}
