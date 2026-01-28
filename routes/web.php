<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// CONTACT
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// KATALOG
Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

// KATALOG DETAIL
Route::get('/katalog-details', function () {
    return view('katalog-details');
})->name('katalog.details');

// BERITA
Route::get('/berita', function () {
    return view('berita');
})->name('berita');

// DETAIL BERITA
Route::get('/detailberita', function () {
    return view('detailberita');
})->name('berita.detail');

Route::get('/{slug}', [PageController::class, 'page']);
