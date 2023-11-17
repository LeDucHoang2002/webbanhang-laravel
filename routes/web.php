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