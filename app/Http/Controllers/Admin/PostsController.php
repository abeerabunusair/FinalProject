<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
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
            'title' =>'required',
            'content'=>'required|min:50|max:500',
            'excerpt'=>'required|min:50|max:150',
            'image'=>'required |image |mimes:png,jpg,jpeg',
          ]);
           //upload of file
        $imgname = 'ogani_' . time() . rand() . $request->file('image')->getClientOriginalName(); //the image name
        //ogani_timeRandnumberImagename
        $request->file('image')->move(public_path('uploads'), $imgname); // upload image
        //save to date
        Posts::create([
            'title' => $request->title,
            'image' => $imgname,
            'excerpt'=>$request->excerpt,
            'content'=>$request->content,
        ]);
        return redirect()->route('admin.posts.index')->with('msg', 'post added  successfully')->with('type', 'success');
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
        $post= Posts::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
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
        $request->validate([

            'title' =>'required',
            'image' => 'nullable|image |mimes:png,jpg,jpeg',
            'content'=>'nullable',
            'excerpt'=>'nullable',


        ]);
        //upload of file

        $posts = Posts::find($id);
        $imgname = $posts->image; //old image
        if ($request->hasFile('image')) {// if upload new image
            $imgname = 'ogani_' . time() . rand() . $request->file('image')->getClientOriginalName(); //the image name

        }          //ogani_timeRandnumberImagename

        //save to date
        $posts->update([
            'title' => $request->title,
            'image' => $imgname,
            'content'=>$request->content,
            'excerpt'=>$request->excerpt,
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads'), $imgname); // upload image

        }
        return redirect()->route('admin.posts.index')->with('msg', 'posts updated')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::destroy($id);
        return redirect()->route('admin.posts.index')->with('msg','post deleted successfully')->with('type','danger');
    }
}
