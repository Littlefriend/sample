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

    public function trend(){
        return view('static_pages/trend');
    }

    public function contact(){
    	return view ('static_pages/contact');
    }

    public function price(){
        return view('product_pages/price');
    }

    public function product($arg1="business",$arg2="",$arg3="0")
    {
        if($arg2==""){
            return view('static_pages/product')
            ->with("abbr",$arg1);
        }else{
            return view('static_pages/item')
            ->with("abbr",$arg1)
            ->with("index",$arg3);
        }
    }

}
