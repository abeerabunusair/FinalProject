<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::all();
        return view('admin.Categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Categories.create');
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
            'name' => 'required',
            'image' => 'required|image |mimes:png,jpg,jpeg',
            'content'=>'nullable',
        ]);
        //upload of file
        $imgname = 'ogani_' . time() . rand() . $request->file('image')->getClientOriginalName(); //the image name
        //ogani_timeRandnumberImagename
        $request->file('image')->move(public_path('uploads'), $imgname); // upload image
        //save to date
        category::create([
            'name' => $request->name,
            'image' => $imgname,
            'content'=>$request->content,
        ]);
        return redirect()->route('admin.categories.index')->with('msg', 'category added successfully')->with('type', 'success');
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
        $category = category::findOrFail($id);
        return view('admin.Categories.edit', compact('category'));
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
            'name' => 'required',
            'image' => 'nullable|image |mimes:png,jpg,jpeg',
            'content'=>'nullable',
        ]);
        //upload of file

        $category = category::find($id);
        $imgname = $category->image; //old image
        if ($request->hasFile('image')) {// if upload new image
            $imgname = 'ogani_' . time() . rand() . $request->file('image')->getClientOriginalName(); //the image name

        }          //ogani_timeRandnumberImagename

        //save to date
        $category->update([
            'name' => $request->name,
            'image' => $imgname,
            'content'=>$request->content,
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads'), $imgname); // upload image

        }
        return redirect()->route('admin.categories.index')->with('msg', 'category updated')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return redirect()->route('admin.categories.index')->with('msg', 'category deleted successfully')->with('type', 'danger');
    }
}
