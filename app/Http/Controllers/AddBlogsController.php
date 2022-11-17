<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AddBlogs;
class AddBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addblogs');
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
        // validations 
        $request->validate([

            'title'=>'required',
            'descriptions'=>'required',
            'addeddate'=>'required',
        ]);
        // elequent query builder

        $data=array(
            "title"=>$request->title,
            "descriptions"=>$request->descriptions,
            "addeddate"=>$request->addeddate,
        );
        AddBlogs::create($data);
        return redirect('addblogs')->with('success','Your Blogs successfully Addedd'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // elequent query builder
        $data=AddBlogs::all();
        return view('manageblogs',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //edit blogs
         $edblogs=AddBlogs::where("id",$id)->first();
         return view('/editblogs',['edblogs'=>$edblogs]);
         
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
        //update blogs
        $data=array(
            "title"=>$request->title,
            "descriptions"=>$request->descriptions,
            "addeddate"=>$request->addeddate,
        );

        AddBlogs::where("id",$id)->update($data);
        return redirect('/manageblogs')->with('upd','Your blogs updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete a blogs
        AddBlogs::where("id",$id)->delete();
        return redirect('/manageblogs')->with('del','Your blogs deleted succefully');
        

    }
}
