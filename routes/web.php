<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/katalog-details', function () {
    return view('katalog-details');
})->name('katalog.details');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');

Route::get('/detailberita', function () {
    return view('detailberita');
})->name('berita.detail');

Route::get('/{slug}', [PageController::class, 'page']);
