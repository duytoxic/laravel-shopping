<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
  public function add($id)
  {
    $product = Product::findOrFail($id);

    Cart::add([
      'id' => $id,
      'name' => $product->name,
      'qty' => 1,
      'price' => $product->discount ?? $product->price,
      'weight' => 0,
      // 'color' => '',
      // 'size' => '',
      'options' => [
        'images' => $product->productImages,
      ],
    ]);

    return back();
  }

  public function delete($rowId)
  {
    Cart::remove($rowId);

    return back();
  }

  public function removeAll()
  {
    Cart::destroy();

    return back();
  }

  public function update(Request $request)
  {
    Cart::update($request->rowId, $request->qty);

    return back();
  }

  public function index()
  {
    $carts = Cart::content();
    $total = Cart::total();
    $subtotal = Cart::subtotal();

    return view('front.shop.cart', compact('carts', 'total', 'subtotal'));
  }
}
