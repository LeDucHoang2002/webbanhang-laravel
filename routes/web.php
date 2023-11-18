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


Route::get('/', [HomeController::class, 'index'])->name('client.home');

//  Route Product

Route::get('/detail', [ProductController::class, 'index'])->name('client.product.detail');

//  Route Cart

Route::get('/cart', [CartController::class, 'index'])->name('client.cart.index');

Route::delete('/remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cart.item');

Route::post('/update-cart-item/{id}', [CartController::class, 'updateCartItem'])->name('update.cart.item');

Route::get('/payment', function () {
    return view('client.payment.index');
})->name('client.payment.index');

Route::get('/profile', function () {
    return view('client.profile.index');
})->name('profile');

use App\Http\Controllers\Auth\AuthController; // Replace with your actual controller

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class,'logout'])->name('logout');
// Route login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


// Route cho trang dashboard của từng loại người dùng
// Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard/client', [LoginController::class, 'dashboard_client'])->name('client_home');
    // Route::get('/dashboard/owner', [LoginController::class, 'dashboard_owner'])->name('owner_home');
    // Route::get('/dashboard/admin', [LoginController::class, 'dashboard_admin'])->name('admin_home');
// });

