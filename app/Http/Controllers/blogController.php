<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\Posts;
use App\Models\category;
use App\Models\product;

class blogController extends Controller
{
    public function index(){
       $categories=category::all();
        $posts=Posts::all();
        $products=product::all();
        $about=about::all();
        return view('website.blog',compact('categories','products','about','posts'));

    }
}
