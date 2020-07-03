<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PayPalController;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/','/home');

Auth::routes();

Route::get('/home', [HomeController::class,'index'])->name('home');

//cart

// 'as' acts as cart.index,cart.add etc
Route::group(['prefix'=>'cart','middleware'=>'auth','as'=>'cart.'], function(){
    Route::get('/', [CartController::class,'index'])->name('index');
    Route::get('/add/{product}', [CartController::class,'add'])->name('add');
    Route::get('/destroy/{product}', [CartController::class,'destroy'])->name('destroy');
    Route::get('/update/{product}', [CartController::class,'update'])->name('update');
    Route::get('/checkout/', [CartController::class,'checkout'])->name('checkout');
});

Route::group(['prefix'=>'orders','middleware'=>'auth','as'=>'orders.'], function(){
    Route::post('/store', [OrderController::class,'store'])->name('store');
});

Route::group(['prefix'=>'paypal','middleware'=>'auth','as'=>'paypal.'], function(){
    Route::get('/expressCheckout/{orderId}', [PayPalController::class,'expressCheckout'])->name('expressCheckout');
    Route::get('/expressCheckout/success/{orderId}', [PayPalController::class,'expressCheckoutSuccess'])->name('success');
    Route::get('/expressCheckout/cancelPayment', [PayPalController::class,'cancelPayment'])->name('cancelPayment');
});


