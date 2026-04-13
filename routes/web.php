<?php

use App\Http\Controllers\logout;
use App\Livewire\About;
use App\Livewire\Cart;
use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\OrderHistory;
use App\Livewire\ProductDetails;
use App\Livewire\Register;
use App\Livewire\Sell;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');


Route::get('/product/{id}', ProductDetails::class)->name('product');

Route::get('/about', About::class)->name('about');

Route::get('/contact', Contact::class)->name('contact');

Route::get('/categories', Category::class)->name('categories');


Route::middleware('auth')->group(function () {
    Route::get('/sell', Sell::class)->name('sell');

    Route::get('cart', Cart::class)->name('cart');

    Route::get('history', OrderHistory::class)->name('history');

    Route::post('/logout', [logout::class, 'logout'])->name('logout');
});

Route::get("/register", Register::class)->name('register')->middleware('guest');

Route::get("/login", Login::class)->name('login')->middleware('guest');
