<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
    	 $shirts = Product::all();
        return view('front.home',compact('shirts'));
    }

     public function shirts()
    {
        $shirts = Product::all();
    	return view('front.shirts',compact('shirts'));
    }

    public function shirt($id, Request $request)
    {
        $shirt = Product::find($id);
    	return view('front.shirt',compact('shirt'));
        
    }
}
