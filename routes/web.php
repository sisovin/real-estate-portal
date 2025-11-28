<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;

Auth::routes();

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

// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Locations
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::post('locations/media', 'LocationsController@storeMedia')->name('locations.storeMedia');
    Route::resource('locations', 'LocationsController');

    // Event Types
    Route::delete('event-types/destroy', 'EventTypesController@massDestroy')->name('event-types.massDestroy');
    Route::post('event-types/media', 'EventTypesController@storeMedia')->name('event-types.storeMedia');
    Route::resource('event-types', 'EventTypesController');

    // Venues
    Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
    Route::post('venues/media', 'VenuesController@storeMedia')->name('venues.storeMedia');
    Route::resource('venues', 'VenuesController');
});
