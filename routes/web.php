<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/automative', [DashboardController::class, 'automative'])->name('automative');
Route::get('/crm', [DashboardController::class, 'crm'])->name('crm');
Route::get('/setting', [DashboardController::class, 'setting'])->name('setting');
Route::get('/widget', [DashboardController::class, 'widget'])->name('widget');
