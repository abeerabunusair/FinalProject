<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = about::all();
        return view('admin.about.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'Facebook' => 'required',
            'Twitter' => 'nullable',
            'LinkedIn' => 'nullable',
            'pint' => 'nullable',
            'mobile' => 'required',
            'email' => 'required',
            'address' => 'required',
            'opentime'=>'required',
        ]);
        about::create([
            'Facebook' => $request->Facebook,
            'Twitter' => $request->Twitter,
            'LinkedIn' => $request->LinkedIn,
            'pint' => $request->pint,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'address'=>$request->address,
            'opentime'=>$request->opentime,
        ]);
        return redirect()->route('admin.about.index')->with('msg', 'about added successfully')->with('type', 'success');
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
        about::destroy($id);
        return redirect()->route('admin.about.index')->with('msg', 'category deleted successfully')->with('type', 'danger');

    }
}
