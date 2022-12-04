<?php

use App\Http\Controllers\Front;
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
  Route::get('/delete/{rowId}', [front\CartController::class, 'index']);
  Route::get('/removeAll', [front\CartController::class, 'removeAll']);
});
