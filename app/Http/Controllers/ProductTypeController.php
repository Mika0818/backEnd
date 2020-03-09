<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
  public function index()
  {
    return view('admin/productType/index');
  }
  public function creat()
  {
    return view('admin/productType/creat');
  }

public function store(Request $request)
{
    $types = $request ->all;
    $product_types = PrpductTypes::creat($types);
    $product_types->save();

    return redirect('/home/productType');

}
