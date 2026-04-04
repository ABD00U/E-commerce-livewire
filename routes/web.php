<?php

use App\Http\Controllers\logout;
use App\Livewire\About;
use App\Livewire\Cart;
use App\Livewire\Category;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\ProductDetails;
use App\Livewire\Register;
use App\Livewire\Sell;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('/sell', Sell::class)->name('sell')->middleware('auth');

Route::get('/product/{id}', ProductDetails::class)->name('product');

Route::get('/about', About::class)->name('about');

Route::get('/contact', Contact::class)->name('contact');

Route::get('/categories', Category::class)->name('categories');


Route::get('cart', Cart::class)->name('cart');


Route::get("/login", Login::class)->name('login')->middleware('guest');

Route::get("/register", Register::class)->name('register')->middleware('guest');


Route::post('/logout', [logout::class, 'logout'])->name('logout');
