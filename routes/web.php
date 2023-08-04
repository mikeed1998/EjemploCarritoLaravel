<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', [ProductController::class, 'getIndex'])->name('product.index');
Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('product.addToCart');
Route::get('/shopping-cart/', [ProductController::class, 'getCart'])->name('product.shoppingCart');
Route::get('/reduce/{id}', [ProductController::class, 'getReduceByOne'])->name('product.reduceByOne');
Route::get('/remove/{id}', [ProductController::class, 'getRemoveItem'])->name('product.remove');

Route::get('/checkout', [ProductController::class, 'getCheckout'])->name('checkout')->middleware('auth');
Route::post('/checkout', [ProductController::class, 'postCheckout'])->name('checkout')->middleware('auth');

Route::get('/signup', [UserController::class, 'getSignup'])->name('user.signup')->middleware('guest');
Route::post('/signup', [UserController::class, 'postSignup'])->name('user.signup')->middleware('guest');
Route::get('/signin', [UserController::class, 'getSignin'])->name('user.signin')->middleware('guest');
Route::post('/signin', [UserController::class, 'postSignin'])->name('user.signin')->middleware('guest');
Route::get('/user/profile', [UserController::class, 'getProfile'])->name('user.profile')->middleware('auth');
Route::get('/user/logout', [UserController::class, 'getLogout'])->name('user.logout')->middleware('auth');