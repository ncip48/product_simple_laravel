<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ProductController::class, 'index']);
Route::get('/detail/{slug}', [ProductController::class, 'detail']);

Auth::routes();

Route::get('/home', [ProductController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::post('/cart', [CartController::class, 'add_to_cart']);
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/checkout', [CartController::class, 'checkout']);
});

Route::get('/tos', function(){
    return view('term');
});
