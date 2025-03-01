<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/SmartTech', function () {
    return view('LandingPage_Mapi');
})->name('Landing');

Route::get('/Productos', function () {
    return view('Mi_Empresa');
})->name('Mi Empresa');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
