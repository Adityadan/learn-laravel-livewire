<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Index;
use App\Livewire\TransactionDashboard;
use App\Livewire\UserDashboard;
use App\Livewire\UserDetail;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user-dashboard', UserDashboard::class)->name('user-dashboard');
// Route::get('transaction-dashboard', TransactionDashboard::class)->name('transaction-dashboard');

Route::get('/',Index::class)->name('home');
Route::get('login',Login::class)->name('login');
Route::get('register',Register::class)->name('register');

Route::get('user-detail/{user}',UserDetail::class)->name('detail-user');
