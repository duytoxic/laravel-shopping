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
  Route::get('/product/{id}', [front\ShopController::class, 'detail']);

  Route::post('/product/{id}', [front\ShopController::class, 'postComment']);

  Route::get('/', [front\ShopController::class, 'index']);
  Route::get('/{categoryName}', [front\ShopController::class, 'category']);
});

Route::prefix('/cart')->group(function(){
  Route::get('/add/{id}', [front\CartController::class, 'add']);
  Route::get('/', [front\CartController::class, 'index']);
  Route::get('/delete/{rowId}', [front\CartController::class, 'delete']);
  Route::get('/removeAll', [front\CartController::class, 'removeAll']);
});

Route::prefix('/checkout')->group(function(){
  Route::get('/', [front\CheckoutController::class, 'index']);
  Route::post('/', [front\CheckoutController::class, 'addOrder']);
  Route::get('/result', [front\CheckoutController::class, 'result']);
});

//Admin
Route::prefix('/admin')->group(function(){
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
  });

  Route::prefix('/order')->group(function(){
    Route::get('/', [admin\OrderController::class, 'index']);
    Route::get('/{id}/edit', [admin\OrderController::class, 'edit']);
    Route::post('/{id}/edit', [admin\OrderController::class, 'update']);
    Route::get('/delete/{id}', [admin\OrderController::class, 'destroy']);
  });
});
