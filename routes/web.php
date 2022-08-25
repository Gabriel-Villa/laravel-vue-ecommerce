<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('/policies', function(){
    $file = storage_path('/app/POLITICAS.pdf'); 
    return \Response::make(file_get_contents($file), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="'.$file.'"'
    ]); 
})->name('policies');

Route::resource('products', ProductController::class)->only(['index', 'show']);

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::post('/cart', [CartController::class, 'store']);

Route::get('/qty/products', [CartController::class, 'qty_products']);

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/login/github', [LoginController::class, 'redirectToGitHub'])->name('login-github');
Route::get('/login/callback', [LoginController::class, 'handleGitHubCallback']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



