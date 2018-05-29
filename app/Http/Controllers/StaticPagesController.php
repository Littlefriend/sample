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

    public function price(){
        return view('product_pages/price');
    }

    public function bussiness_ybj(){
        return view('swkd_pages/ybj');
    }

    public function bussiness_wwj(){
        return view('swkd_pages/wwj');
    }

    public function bussiness_kyj(){
        return view('swkd_pages/kyj');
    }

    public function bussiness_hpj(){
        return view('swkd_pages/hpj');
    }

    public function bussiness_hjj(){
        return view('swkd_pages/hjj');
    }

    public function bussiness_qt(){
        return view('swkd_pages/qt');
    }

    public function business(){
        return view('product_pages/business');
    }

    public function wedding(){
        return view('product_pages/wedding');
    }

    public function birthday(){
        return view('product_pages/birthday');
    }

    public function culture(){
        return view('product_pages/culture');
    }

    public function wedding_hhj(){
        return view('hqxy_pages/hhj');
    }

    public function wedding_mmj(){
        return view('hqxy_pages/mmj');
    }

    public function wedding_klj(){
        return view('hqxy_pages/klj');
    }

    public function wedding_lyj(){
        return view('hqxy_pages/lyj');
    }

    public function wedding_txj(){
        return view('hqxy_pages/txj');
    }

    public function wedding_xyj(){
        return view('hqxy_pages/xyj');
    }

    public function wedding_qt(){
        return view('hqxy_pages/qt');
    }



}
