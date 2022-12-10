<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
  public function index()
  {
    $carts = Cart::content();
    $total = Cart::total();
    $subtotal = Cart::subtotal();

    return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
  }

  public function addOrder(Request $request)
  {
    if ($request->payment_type == 'pay_later') {
      // add order
      $order = Order::create($request->all());

      // add order detail
      $carts = Cart::content();
      foreach ($carts as $cart) {
        $data = [
          'order_id' => $order->id,
          'product_id' => $cart->id,
          'qty' => $cart->qty,
          'amount' => $cart->price,
          'total' => $cart->price * $cart->qty,
        ];
        OrderDetail::create($data);
      }

      //send mail
      $total = Cart::total();
      $subtotal = Cart::subtotal();
      $this->sendMail($order, $total, $subtotal);

      // delete cart
      Cart::destroy();

      //return result
      return redirect('checkout/result')->with('notification', 'Đăng ký mua hàng thành công!');
    } else{
      return 'Chưa hỗ trợ hình thức thanh toán online';
    }
  }

  public function result()
  {
    $notification = session('notification');
    return view('front.checkout.result', compact('notification'));
  }

  public function sendMail($order, $total, $subtotal)
  {
    $email_to = $order->email;
    Mail::send('front.checkout.email', compact('order', 'total', 'subtotal'), function($message) use ($email_to){
      $message->from('duy.cm1010@gmail.com', 'Thông báo đặt hàng');
      $message->to($email_to, $email_to);
      $message->subject('Order Notification');
    });
  }
}
