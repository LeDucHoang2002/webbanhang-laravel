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


Route::get('/', [HomeController::class, 'index'])->name('client.home');

Route::get('/detail', [ProductController::class, 'index'])->name('client.product.detail');

Route::get('/payment', function () {
    return view('client.payment.index');
})->name('client.payment.index');

Route::get('/profile', function () {
    return view('client.profile.index');
})->name('client.profile.index');

