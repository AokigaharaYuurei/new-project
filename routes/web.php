<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');       
})->name('home');
// Главная страница обозначается слешем


Route::get('/about', [TestController::class, 'about'])->name('about');


Route::get('/contact', [TestController::class, 'contact'])->name('contact');