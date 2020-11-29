<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\orm;


class ormcontroller extends Controller
{
    //
    public function index()
    {
        return view('orm.orm_form');
    }
    public function store(Request $request)
    {
        $orm = new orm;
        $file = $request->file('image');
        $path = "upload";
        $name = $file->getClientOriginalName();
        $upload = $file->move($path,$name);
        $h = implode(',',$request->hby);
        $orm->orm_fname = $request->first_name;
        $orm->orm_lname = $request->last_name;
        $orm->orm_email = $request->email;
        $orm->orm_password = $request->password;
        $orm->orm_gender = $request->gender;
        $orm->orm_dob = $request->dob;
        $orm->orm_image = $name;
        $orm->orm_hobbies = $h;
        $orm->save();
        return redirect('orm')->with('message','Successfully data inserted!!');
    }
    public function show()
    {
        $data = orm::all();
        return view('orm.orm_show')->with('data1',$data);   

    }
    public function delete($orm_id)
    {
        //echo $orm_id;
        $where = ["orm_id" => $orm_id ];
        //$d = new orm;
        //$delete = $d->where($where)->delete();

        $del = orm::where($where)->delete();
        if($del)
        {
            echo "deleted";
        }
        else
        {
            echo "Error";
        }
        return redirect('orm_show')->with('message','Deleted successfully!!');
    }
    public function edit($id)
    {
        $id = Crypt::decryptString($id);
        $where = ["orm_id" => $id];
        $data =   orm::where('orm_id',$id)->get();
        // print_r($data);
        return view('orm.orm_edit')->with('edit',$data);
    }
    public function update($id, Request $request)
    {
        $orm = new orm;
        $id = Crypt::decryptString($id);
        $where = ["orm_id" => $id];
            if($_FILES['image']['name'])
            {
            $file = $request->file('image');
            $path = "upload";
            $name = $file->getClientOriginalName();
            $upload = $file->move($path,$name);
            
            }   
            else
            {
                $name = $request->old_image;
            }  
            $h = implode(',',$request->hby);
            
            $data = [
                "orm_fname" =>  $request->first_name,
                "orm_lname" =>  $request->last_name,
                "orm_email" =>  $request->email,
                "orm_password" =>  $request->password,
                "orm_gender" =>  $request->gender,
                "orm_dob" =>  $request->dob,
                "orm_image" =>  $name,
                "orm_hobbies" =>  $h,
            ];
            $orm->where($where)->update($data);
    }
}