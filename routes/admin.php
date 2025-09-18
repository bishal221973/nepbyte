<?php

use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VendorController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('client')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('client.index');
    Route::get('/create', [ClientController::class, 'create'])->name('client.create');
    Route::get('/show', [ClientController::class, 'show'])->name('client.show');
    Route::get('/security', [ClientController::class, 'security'])->name('client.security');
    Route::get('/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/payment-history', [ClientController::class, 'paymentHistory'])->name('client.paymentHistory');
    Route::get('/clients-logs', [ClientController::class, 'logs'])->name('client.logs');
});

Route::prefix('vendor')->group(function () {
    Route::get('/', [VendorController::class, 'index'])->name('vendor.index');
    Route::get('/create', [VendorController::class, 'create'])->name('vendor.create');
    Route::get('/show', [VendorController::class, 'show'])->name('vendor.show');
    Route::get('/security', [VendorController::class, 'security'])->name('vendor.security');
    Route::get('/orders', [VendorController::class, 'orders'])->name('vendor.orders');
    Route::get('/payment-history', [VendorController::class, 'paymentHistory'])->name('vendor.paymentHistory');
    Route::get('/vendors-logs', [VendorController::class, 'logs'])->name('vendor.logs');
});

Route::prefix('ordres')->group(function () {
    Route::get('/', [OrderController::class, 'index'])->name('order.index');
    Route::get('/service-listing', [OrderController::class, 'serviceListing'])->name('order.service.list');
    Route::get('/show', [OrderController::class, 'show'])->name('order.show');
});


Route::prefix('billings')->group(function () {
    Route::get('/', [BillingController::class, 'index'])->name('billing.index');
});
