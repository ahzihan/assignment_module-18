<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Posts;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Posts::orderBy('created_at','desc')->get();

        return view('admin.post_list',compact('data'));
    }

    public function create()
    {
        $category=Category::all();
        $data['cat']=$category;

        return view('admin.add_post',$data);
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
            'title'=>'required | max:255',
            'description'=>'required',
            'categoryId'=>'required'
        ]);

        $file=$request->file('photo');
        $photo=time().'_'.$file->getClientOriginalName();
        $file->move('uploads',$photo);
        $d=array(
            'title'=>$request->title,
            'description'=>$request->description,
            'categoryId'=>$request->categoryId,
            'photo'=>$photo
        );
        Posts::create($d);
        return redirect('/post')->with('success','Post Inserted Successfully!');
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
