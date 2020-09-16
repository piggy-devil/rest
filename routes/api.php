<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Transaction\TransactionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider within a group which
| Here is where you can register API routes for your application. These
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Buyers
 * */
Route::resource('buyers', BuyerController::class)->only(['index', 'show']);

/**
 * categories
 * */
Route::resource('categories', CategoryController::class)->except(['create', 'edit']);

/**
 * products
 * */
Route::resource('products', ProductController::class)->only(['index', 'show']);

/**
 * sellers
 * */
Route::resource('sellers', SellerController::class)->only(['index', 'show']);

/**
 * transactions
 * */
Route::resource('transactions', TransactionController::class)->only(['index', 'show']);

/**
 * users
 * */
Route::resource('users', UserController::class)->except(['create', 'edit']);
