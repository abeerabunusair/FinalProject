<?php

namespace App\Http\Controllers;
use App\Models\about;
use App\Models\Posts;
use App\Models\category;
use App\Models\product;


use Illuminate\Http\Request;

class shopeController extends Controller
{
    public function index(){
        $categories=category::all();
        $posts=Posts::all();
        $products=product::all();
        $about=about::all();
        return view('website.shop',compact('categories','products','about'));

    }
}
