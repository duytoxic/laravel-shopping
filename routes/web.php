<?php

use App\Http\Controllers\Front;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Front
Route::get('/', [front\HomeController::class, 'index']);

Route::prefix('/shop')->group(function(){
  Route::get('/product/{id}', [front\ShopController::class, 'detail']); //shop
  Route::middleware('checkuserlogin')->post('/product/{id}', [front\ShopController::class, 'postComment']);

  Route::get('/', [front\ShopController::class, 'index']); //shop
  Route::get('/{categoryName}', [front\ShopController::class, 'category']);
});

Route::prefix('/cart')->group(function(){
  Route::get('/add/{id}', [front\CartController::class, 'add']);
  Route::get('/', [front\CartController::class, 'index']);
  Route::get('/delete/{rowId}', [front\CartController::class, 'delete']);
  Route::get('/removeAll', [front\CartController::class, 'removeAll']);
  // Route::post('/update', [front\CartController::class, 'update']);
});

Route::middleware('checkuserlogin')->prefix('/checkout')->group(function(){
  Route::get('/', [front\CheckoutController::class, 'index']);
  Route::post('/', [front\CheckoutController::class, 'addOrder']);
  Route::get('/result', [front\CheckoutController::class, 'result']);
  Route::get('/failed', [front\CheckoutController::class, 'failed']);
});

// Route::middleware('checkuserlogin')->get('/checkout', [front\CheckoutController::class, 'index']);

Route::prefix('/account')->group(function(){
  Route::get('/login', [front\AccountController::class, 'login']);
  Route::post('/login', [front\AccountController::class, 'checkLogin']);
  Route::get('/logout', [front\AccountController::class, 'logout']);
  Route::get('/register', [front\AccountController::class, 'register']);
  Route::post('/register', [front\AccountController::class, 'postRegister']);
  Route::prefix('/detail')->group(function(){
    Route::get('/', [front\AccountController::class, 'dashboard']);
  });
});

//Admin
Route::middleware('checkadminlogin')->prefix('/admin')->group(function(){
  Route::get('/', [admin\DashboardController::class, 'index']);
  Route::prefix('/user')->group(function(){
    Route::get('/', [admin\UserController::class, 'index']);
    Route::get('/create', [admin\UserController::class, 'create']);
    Route::post('/create', [admin\UserController::class, 'store']);
    Route::get('/{id}/edit', [admin\UserController::class, 'edit']);
    Route::post('/{id}/edit', [admin\UserController::class, 'update']);
    Route::get('/delete/{id}', [admin\UserController::class, 'destroy']);
  });

  Route::get('/category', [admin\ProductCategoryController::class, 'index']);
  Route::get('/category/create', [admin\ProductCategoryController::class, 'create']);
  Route::get('/category/{id}/edit', [admin\ProductCategoryController::class, 'edit']);
  Route::post('/category/create', [admin\ProductCategoryController::class, 'store']);
  Route::post('/category/{id}/edit', [admin\ProductCategoryController::class, 'update']);
  Route::get('/category/delete/{id}', [admin\ProductCategoryController::class, 'destroy']);

  Route::prefix('/product')->group(function(){
    Route::get('/', [admin\ProductController::class, 'index']);
    Route::get('/create', [admin\ProductController::class, 'create']);
    Route::post('/create', [admin\ProductController::class, 'store']);
    Route::get('/{id}/edit', [admin\ProductController::class, 'edit']);
    Route::post('/{id}/edit', [admin\ProductController::class, 'update']);
    Route::get('/delete/{id}', [admin\ProductController::class, 'destroy']);

    Route::get('/{product_id}', [admin\ProductController::class, 'show']);
    Route::get('/{product_id}/image', [admin\ProductImageController::class, 'index']);
    Route::post('/{product_id}/image', [admin\ProductImageController::class, 'store']);
  });

  Route::prefix('/order')->group(function(){
    Route::get('/', [admin\OrderController::class, 'index']);
    Route::get('/{id}', [admin\OrderController::class, 'show']);
    Route::get('/{id}/edit', [admin\OrderController::class, 'edit']);
    Route::post('/{id}/edit', [admin\OrderController::class, 'update']);
    Route::get('/delete/{id}', [admin\OrderController::class, 'destroy']);
  });

});

Route::prefix('/admin')->group(function(){
  Route::get('/login', [admin\DashboardController::class, 'login']);
  Route::post('/login', [admin\DashboardController::class, 'checkLogin']);
});
// Route::get('admin/dashboard', [admin\DashboardController::class, 'index']);
// Route::get('admin/login', [admin\DashboardController::class, 'login']);
