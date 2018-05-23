<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //

    public function cover(){
        return view('static_pages/cover');
    }
    public function home(){
    	return view('static_pages/home');
    }

    public function about(){
    	return view('static_pages/about');
    }

    public function product(){
        return view('static_pages/product');
    }

    public function trend(){
        return view('static_pages/trend');
    }

    public function contact(){
    	return view ('static_pages/contact');
    }
}
