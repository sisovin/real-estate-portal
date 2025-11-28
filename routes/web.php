<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/venues/{slug}/{id}', [VenueController::class, 'show'])->name('venues.show');
Route::get('/locations/{slug}', [LocationController::class, 'show'])->name('location');
Route::get('/event-types/{slug}', [EventTypeController::class, 'show'])->name('event_type');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
