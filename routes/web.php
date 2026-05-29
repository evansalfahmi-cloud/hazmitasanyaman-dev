<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth'])
    ->prefix('admin')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/products', [ProductController::class, 'index'])
            ->name('admin.products.index');

        Route::get('/products/create', [ProductController::class, 'create'])
            ->name('admin.products.create');

        Route::post('/products', [ProductController::class, 'store'])
            ->name('admin.products.store');

    });

require __DIR__.'/auth.php';