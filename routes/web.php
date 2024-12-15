<?php

use App\Http\Controllers\UserCotroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

//Single (butuh auth tapi hanya kaya satu page)
// Route::middleware(['auth'])->get('/dashboard', function () {
//     return view('pages.dashboard');
// })->name('dashboard');

//Group (butuh auth disemua page)
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');

    Route::resource('users', UserCotroller::class);
});
