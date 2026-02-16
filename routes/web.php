<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{category}', [PortfolioController::class, 'category'])->name('portfolio.category');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [AboutController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/consultation', [HomeController::class, 'consultation'])->name('consultation.book');