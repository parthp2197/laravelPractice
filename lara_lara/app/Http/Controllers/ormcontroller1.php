<?php

namespace App\Http\Controllers;

use App\registration;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
class ormcontroller1 extends Controller
{
    public function ShowReg()
    {
        return view('view.registration');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $registration = new registration();
        $file = $request->file('image');
        $path = "uploads";
        $name = $file->getClientOriginalName();
        $upload = $file->move($path,$name);
        $registration->name = $request->first_name;
        $registration->Hobbies =  implode(",",$request->hby);
        $registration->lname = $request->last_name;
        $registration->email = $request->email;
        $registration->password = $request->password;
        $registration->DOB = $request->dob;
        $registration->gender = $request->gender;
        $registration->image = $request->image;
        $registration->save();    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
