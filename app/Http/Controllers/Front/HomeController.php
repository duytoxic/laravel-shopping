<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  //
  public function index()
  {
    $manProducts = Product::where('status', true)->where('product_category_id',1)->get();
    $womanProducts = Product::where('status', true)->where('product_category_id',2)->get();
    $featuredProducts = Product::where('status', true)->limit(8)->get();

    return view('front.index', compact('manProducts', 'womanProducts', 'featuredProducts'));
  }
}
