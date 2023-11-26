<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Auth\FacebookController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\UserProfileController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', [HomeController::class, 'index'])->name('client.home');

//  Route Product

Route::get('/detail', [ProductController::class, 'index'])->name('client.product.detail');
//  Route Order Product

Route::post('/order-product', [OrderController::class, 'ProcessOrder'])->name('client.order.processOrder');

// routes/web.php
Route::post('/saveOrder', [OrderController::class, 'SaveOrder'])->name('saveOrder');


Route::get('/saveOrderOnline', [OrderController::class, 'saveOrderOnline'])->name('saveOrderOnline');

//  Route Cart

Route::get('/cart', [CartController::class, 'index'])->name('client.cart.index');

Route::delete('/remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cart.item');

Route::post('/update-cart-item/{id}', [CartController::class, 'updateCartItem'])->name('update.cart.item');

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
// Route login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/profile', [UserProfileController::class, 'showProfile'])->name('profile');

Route::get('/password', [UserProfileController::class, 'showPassword'])->name('password');

Route::get('/view', [UserProfileController::class, 'showView'])->name('view');

Route::get('/settings', [UserProfileController::class, 'showSettings']);

Route::post('/profile/update', [UserProfileController::class, 'updateProfile'])->name('profile.update');

Route::post('/profile/update-password', [UserProfileController::class, 'updatePassword'])->name('update.password');

Route::post('/confirm-received/{id}', [UserProfileController::class, 'confirmReceived'])->name('confirm.received');
// Route::get('/email/verify/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');


Route::get('/email/verify/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');

Route::get('/verify-email', function () {
    return view('emails.verify-email');
})->name('verify.email.custom');

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::post('/vnpay_payment', [PaymentController::class, 'vnpayPayment'])->name('vnpay.payment');

Route::post('/paypal_payment', [PaymentController::class, 'pay'])->name('paypal.payment');

Route::get('/success', [PaymentController::class, 'success'])->name('success');

Route::get('/error', [PaymentController::class, 'error']);

// Route Facebook-Login
Route::get('auth/facebook',[FacebookController::class,'facebookpage']);;

Route::get('auth/facebook/callback',[FacebookController::class,'facebookredirect']);;

// Route Google-Login
use App\Http\Controllers\Auth\GoogleAuthController;
//login with google
Route::get('auth/google',[GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/callback',[GoogleAuthController::class,'callbackGoogle']);

Route::get('/Admin', function () {
    return view('admin.home.index');
})->name('Admin');
