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
use App\Http\Controllers\Auth\LoginController;


Route::get('/', [HomeController::class, 'index'])->name('client.home');

Route::get('/detail', function () {
    return view('client.product.detail');
})->name('client.product.detail');

Route::get('/payment', function () {
    return view('client.payment.index');
})->name('client.payment.index');

Route::get('/profile', function () {
    return view('client.profile.index');
})->name('client.profile.index');

Route::get('/account', function () {
    return view('auth.login_register');
})->name('account');

Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route xử lý đăng xuất
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route cho trang dashboard của từng loại người dùng
// Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard/client', [LoginController::class, 'dashboard_client'])->name('client_home');
    // Route::get('/dashboard/owner', [LoginController::class, 'dashboard_owner'])->name('owner_home');
    // Route::get('/dashboard/admin', [LoginController::class, 'dashboard_admin'])->name('admin_home');
// });

Route::get('/owner_home',[LoginController::class,'dashboard_owner'])->name('owner_home');

Route::get('/admin home page',[LoginController::class,'dashboard_admin'])->name('admin_home');