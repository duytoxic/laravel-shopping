<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;

class AccountController extends Controller
{
  public function login()
  {
    return view('front.account.login');
  }

  public function checkLogin(Request $request)
  {
    $credentials = [
      'email' => $request->email,
      'password' => $request->password,
      'level' => 2 // customer,
    ];

    $remember = $request->remember;


    if (Auth::attempt($credentials, $remember)) {
      return redirect('/');
    } else {
      return back()->with('notification', 'ERROR: Email hoặc mật khẩu không chính xác');
    }
  }

  public function register()
  {
    return view('front.account.register');
  }

  public function postRegister(Request $request)
  {
    if ($request->password != $request->cf_password) {
      return back()->with('notification', 'ERROR: Mật khẩu nhập lại không đúng');
    }
    $data = [
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
      'level' => 2,
    ];

    User::create($data);
    return redirect('account/login')->with('notification', 'Đăng ký thành công! Vui lòng đăng nhập.');
  }

  public function dashboard(){

    $orders = Order::where('user_id', '=', Auth::id())->get();
    return view('front.account.detail.index', compact('orders'));
  }

  public function logout()
  {
    Auth::logout();
    return redirect('/account/login');
  }
}
