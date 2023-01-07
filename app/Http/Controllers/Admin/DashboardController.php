<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index(Request $request)
  {

    return view('admin.dashboard.index');
  }

  public function login()
  {
    return view('admin.account.login');
  }

  public function checkLogin(Request $request)
  {
    $credentials = [
      'email' => $request->email,
      'password' => $request->password,
      'level' => 1 // admin,
    ];

    $remember = $request->remember;

    if (Auth::attempt($credentials, $remember)) {
      return redirect('/admin/product');
    } else {
      return back()->with('notification', 'ERROR: Email hoặc mật khẩu không chính xác');
    }
  }
}
