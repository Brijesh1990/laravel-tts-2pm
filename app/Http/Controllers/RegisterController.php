<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patel-restaurents.register');
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
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required',
            'mobile'=>'required',
            'photo'=>'required',
            'chk'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'country'=>'required',
            'state'=>'required',
            'city'=>'required',
            ]);
            date_default_timezone_set("Asia/Calcutta");
            $data=array(
                "text_name"=>$request->name,
                "text_email"=>$request->email,
                "text_password"=>$request->password,
                "text_mobile"=>$request->mobile,
                "text_photo"=>$request->photo,
                "text_hobby"=>implode(",",$request->chk),
                "text_gender"=>$request->gender,
                "text_address"=>$request->address,
                "cid"=>$request->country,
                "sid"=>$request->state,
                "ctid"=>$request->city,
                
            );


            User::create($data);
            //dd($data);
            return redirect('/create-account')->with('success','Thanks for creating your account with us!');
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
