<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ParthController extends Controller
{
    public function ParthRegistration()
    {
        return view('ParthRegistration');
    }

    public function ParthInsert(Request $r)
    {
        $file = $r->file('image');
        $path = "uploads";
        $name = $file->getClientOriginalName();
        $upload = $file->move($path,$name);
        $d = array(
            "name" => $r->name,
            "lname" => $r->lname,
            "email" => $r->email,
            "password" => $r->password,
            "gender"=>$r->gender,
            "dob"=>$r->dob,
            "_token"=>$r->_token);
    
        $i = DB::table('reg')->insert($d);
        
        if($i)
        {
            return redirect('ParthRegistration');
        }
    
    
    }
    public function ParthShow()
    {
        $pusers = DB::table('reg')->get();
        return view('pshowdata')->with('parth',$pusers);
    }

    public function pdelete($id)
    {
        $where = ["id" => $id];
        $pdel = DB::table('reg')->delete($where);
        if($pdel)
        {
            return redirect('parthshowdata')->with('Message','Deleted');
        }
        else
        {
            return redirect('parthshowdata')->with('Message','Error');
        }
    }
}
