<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsImgs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
//單張圖片上傳-
{
public function index()
{
    $items = NewsImgs::with('News_imgType')->get();
    return view('admin/news/create',compact("items"));
}

public function create()
{
    $productTypes = ProductType::all();
    return view('auth/news-img/create',compact('productTypes'));
}

public function store(Request $request)
{
    $requsetData = $request->all();

    //單一檔案
    if($request->hasFile('img')) {
        $file = $request->file('img');
        $path = $this->fileUpload($file,'news');
        $requsetData['img'] = $path;
    }

    $new_news = News::create($news_datat);

// create 多張圖片
if($request->hash_file('img')){
$file = $request->('img')


}

}
