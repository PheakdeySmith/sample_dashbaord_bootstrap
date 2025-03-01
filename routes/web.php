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
Route::get('/login', [DashboardController::class, 'login'])->name('login');
Route::get('/register', [DashboardController::class, 'register'])->name('register');
Route::get('/billing', [DashboardController::class, 'billing'])->name('billing');
Route::get('/invoice', [DashboardController::class, 'invoice'])->name('invoice');
Route::get('/security', [DashboardController::class, 'security'])->name('security');
Route::get('/pricing', [DashboardController::class, 'pricing'])->name('pricing');
Route::get('/chartjs', [DashboardController::class, 'chartjs'])->name('chartjs');
Route::get('/sweet_alert', [DashboardController::class, 'sweet_alert'])->name('sweet_alert');
Route::get('/notification', [DashboardController::class, 'notification'])->name('notification');
Route::get('/wizard', [DashboardController::class, 'wizard'])->name('wizard');
Route::get('/datatable', [DashboardController::class, 'datatable'])->name('datatable');
Route::get('/calendar', [DashboardController::class, 'calendar'])->name('calendar');
