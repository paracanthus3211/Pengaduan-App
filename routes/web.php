<?php

use App\Livewire\Dashboard\Home;
use App\Livewire\Dashboard\Laporan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('components.layouts.app');
// });

Route::get('/home', Home::class)->name('home');
Route::get('/laporan', Laporan::class)->name('laporan');

