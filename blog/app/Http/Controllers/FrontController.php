<?php

namespace App\Http\Controllers;
 use DB;
//  1.匯入DB
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('front/index');
    }

    public function news() {
        $news_data = News::orderBy('sort', 'desc')->get();
        return view('front/news',compact('news_data'));
    }


}