<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');       
})->name('home');
// Главная страница обозначается слешем


Route::get('/about', [TestController::class, 'about'])->name('about');


Route::get('/contact', [TestController::class, 'contact'])->name('contact');


Route::get('/products',[ProductController::class, 'index'])->name('products.index');


Route::delete('/products/{product}',[ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/products/{product}',[ProductController::class, 'show'])->name('products.show');

Route::get('/create',[ProductController::class, 'create'])->name('products.create');

Route::post('/products',[ProductController::class, 'store'])->name('products.store');