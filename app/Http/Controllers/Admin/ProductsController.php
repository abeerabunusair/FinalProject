<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\category;
use App\Http\Controllers\Admin\Auth;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //return page
    {
        $product=product::with('category')->get();
        $category=category::with('products')->get();

        //$product=product::all();
        return view('admin.Products.index',compact('product','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=product::with('category')->get();
        $category=category::with('products')->get();
        return view('admin.Products.create',compact('product','category'));
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
          'quantity'=>'required',
          'Price'=>'required',
         'category'=>'required',
          'excerpt'=>'required',
          'image'=>'required |image |mimes:png,jpg,jpeg',
        ]);
        //upload of file
        $imgname ='ogani_'.time().rand().$request->file('image')->getClientOriginalName();//the image name
        //ogani_timeRandnumberImagename
        $request->file('image')->move(public_path('uploads'), $imgname);// upload image
        //save to date


        product::create([
          'name'=>$request->name,
          'quantity'=>$request->quantity,
          'price'=>$request->Price,
          'categories_id'=>$request->category,
         ' excerpt'=>$request->excerpt,
          'image'=> $imgname,
        ]);
        return redirect()->route('admin.products.index')->with('msg','product added successfully')->with('type','success');
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
        $product = product::findOrFail($id);
        $category=category::findOrFail($id);
        return view('admin.products.edit', compact('product','category'));
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
            'name'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'category'=>'required',
            'excerpt'=>'nullable',
            'image' => 'nullable|image |mimes:png,jpg,jpeg',

        ]);
        //upload of file

        $product = product::find($id);
        $imgname = $product->image; //old image
        if ($request->hasFile('image')) {// if upload new image
            $imgname = 'ogani_' . time() . rand() . $request->file('image')->getClientOriginalName(); //the image name

        }          //ogani_timeRandnumberImagename

        //save to date
        $product->update([
            'name' => $request->name,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'image' => $imgname,
            'excerpt'=>$request->excerpt,
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move(public_path('uploads'), $imgname); // upload image

        }
        return redirect()->route('admin.products.index')->with('msg', 'product updated')->with('type', 'info');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       product::destroy($id);
        return redirect()->route('admin.products.index')->with('msg', 'product deleted successfully')->with('type', 'danger');

    }
}
