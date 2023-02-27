<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});

// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('pages.auth.forgot');
// })->name('forgot');

// Route::get('/reset', function () {
//     return view('pages.auth.reset');
// })->name('reset');
