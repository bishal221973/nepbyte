<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\BillingController;
use App\Http\Controllers\ClientDashboardController;

Route::get('/', [ClientDashboardController::class, 'dashboard'])->name('client.dashboard')->middleware(['auth.redirect']);

Route::prefix('ordres')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('client.order.index');
    Route::get('/create', [OrderController::class, 'create'])->name('client.order.create');
    Route::get('/service-listing', [OrderController::class, 'serviceListing'])->name('client.order.service.list');
    Route::get('/show', [OrderController::class, 'show'])->name('client.order.show');
});


Route::prefix('billings')->group(function () {
    Route::get('/', [BillingController::class, 'index'])->name('billing.index');
});
