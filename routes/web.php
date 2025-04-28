<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaqueteController;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', function () {
    return view('contact');
})->name('contact.submit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('paquetes', PaqueteController::class);
