<?php

use App\Livewire\Admin\DashboardAdmin;
use App\Livewire\Admin\EditLaporanAdmin;
use App\Livewire\Admin\LaporanAdmin;
use App\Livewire\Admin\ListUser;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Umum\Profile;
use App\Livewire\User\CreateLaporan;
use App\Livewire\User\DashboardUser;
use App\Livewire\User\EditLaporan;
use App\Livewire\User\LaporanUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('components.layouts.app');
// });

Route::prefix('admin')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/', DashboardAdmin::class)->name('dashboard');
    Route::get('/laporan', LaporanAdmin::class)->name('laporan');
    Route::get('/laporan/{id}/edit', EditLaporanAdmin::class)->name('laporan.edit');
    Route::get('/list-user', ListUser::class)->name('list-user');
    Route::get('/my-profile', Profile::class)->name('profile');
});

Route::prefix('user')->middleware(['auth', 'user'])->name('user.')->group(function () {
    Route::get('/', DashboardUser::class)->name('dashboard');
    Route::get('/laporan', LaporanUser::class)->name('laporan');
    Route::get('/laporan/new', CreateLaporan::class)->name('laporan.create');
    Route::get('/laporan/{id}/edit', EditLaporan::class)->name('laporan.edit');
    Route::get('/my-profile', Profile::class)->name('profile');
});

Route::get('/auth/start-session', Login::class)->name('login')->middleware('guest');
Route::get('/auth/register', Register::class)->name('register')->middleware('guest');


// Route::get('/home', Home::class)->name('home');
// Route::get('/laporan', Laporan::class)->name('laporan');
