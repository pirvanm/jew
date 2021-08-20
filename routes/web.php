<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriesController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// permite recunoastrrea rutelor de login si register
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('/events', function () {
    return view('events.index');
});


Route::get('/jewellery', function () {
    return view('jewellery.index');
});