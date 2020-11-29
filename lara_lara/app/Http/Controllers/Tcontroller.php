<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Crypt;

class Tcontroller extends Controller
{
    //
    public function Show()
    {
        return view('Taskreg');
    }

    public function Insert(Request $request)
    {
        $file = $request->file('image');
        $path = "uploads";
        $name = $file->getClientOriginalName();
        $upload = $file->move($path,$name);
        $h = implode(',',$request->hby);
        $data = array(
            "name" => $request->first_name,
            "lname" => $request->last_name,
            "email" => $request->email,
            "password" => $request->password,
            "gender" => $request->gender,
            "DOB" => $request->dob,
            "image" => $path,
            "Hobbies" =>  $h,
            
             "created_at" => date('Y-m-d H:i:s')
        );
        $insert = DB::table('registration')->insert($data);
        if($insert)
        {
            return redirect('Taskreg');
        }
    }
    public function dispdata()
    {
        $show = DB::table('registration')->get();
        return view('dispdata')->with('disp',$show);
    }
    public function tdelete($id)
    {
        $where = ["id" => $id];
        $del = DB::table('registration')->delete($where);
        if($del)
        {
            return redirect('dispdata');
            echo "Deleted";
        }
        else
        {
            return redirect('dispdata');
            echo "Contegency";
        }
    }
    public function tupdate($id)
    {
        $id = Crypt::decryptString($id);
        $where = ["id" => $id];
        $data = DB::table('registration')->where($where)->get();
        // print_r($data);
        return view('change')->with('change',$data);
    }
    public function tedit($id, Request $request)
    {
        $where = ["id" => $id];
        $h = implode(',',$request->hby);
        $data = array(
            "name" =>$request->first_name,
            "lname" =>$request->last_name,
            "email" =>$request->email,
            "password" =>$request->password,
            "gender" =>$request->gender,
            "DOB" =>$request->dob,
            "image" =>$request->image,
            "hobbies" =>$request->$h,
            "created_at" => date('Y-m-d H:i:s')
        );
        print_r($data);
        die();
        // $update = DB::table('registration')->where($where)->update($data);
        // if($update)
        // {
        //     return redirect('dispdata');
        // }
        // else
        // {
        //     return redirect('dispdata');
        //     echo "Contigency";
        // }
    }
}