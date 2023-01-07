<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
  public function index(Request $request)
  {
    // get categories
    $categories = ProductCategory::all(); //categories
    $countCategories = ProductCategory::withCount('products')->get();

    // get products
    $perPage = $request->show ?? 9;
    $sortBy = $request->sort_by ?? 'latest';
    $search = $request->search ?? '';

    $products = Product::where('name', 'like', '%' . $search . '%');
    // dd($products);

    switch ($sortBy) {
      case 'latest':
        $products = $products->orderBy('id');
        break;
      case 'oldest':
        $products = $products->orderByDesc('id');
        break;
      case 'name-ascending':
        $products = $products->orderBy('name');
        break;
      case 'name-descending':
        $products = $products->orderByDesc('name');
        break;
      case 'price-ascending':
        $products = $products->orderBy('price');
        break;
      case 'price-descending':
        $products = $products->orderByDesc('name');
        break;
      default:
        $products = $products->orderBy('id');
        break;
    }

    $products = Product::paginate($perPage);

    // $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);

    return view('front.shop.index', compact('products', 'categories', 'countCategories'));
  }


  public function detail($id)
  {
    $product = Product::findOrFail($id);

    $avgRating = 0;
    $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
    $countRating = count($product->productComments);
    if ($countRating != 0) {
      $avgRating =  $sumRating / $countRating;
    }

    $relatedProducts = Product::where('product_category_id', $product->product_category_id)->where('tag', $product->tag)->limit(3)->get();

    return view('front.shop.detail', compact('product', 'avgRating', 'relatedProducts'));
  }

  public function postComment(Request $request)
  {
    $data = $request->all();
    $data['rating'] = 5;
    ProductComment::create($data);

    return redirect()->back();
  }

  public function category($categoryName, Request $request)
  {
    // get categories
    $categories = ProductCategory::all();
    $countCategories = ProductCategory::withCount('products')->get();

    // get products
    $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery()->paginate();

    return view('front.shop.index', compact('products', 'categories', 'countCategories'));
  }

  public function sortAndPagination()
  {
    # code...
  }
}
