<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\category;
use App\Models\Posts;
use App\Models\product;
use Illuminate\Http\Request;

class websiteController extends Controller

{

    public function index(){
        $categories=category::all();
        $posts=Posts::all();
        $products=product::all();
        $about=about::all();
        return view('website.index',compact('categories','products','about'));
    }

}
