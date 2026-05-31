<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TestimoniController;

/*
|--------------------------------------------------------------------------
| Frontend
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/products', [FrontendProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{product}', [FrontendProductController::class, 'show'])
    ->name('products.show');
Route::view('/promo', 'frontend.promo.index')
    ->name('promo');
Route::view('/about', 'frontend.about.index')
    ->name('about');
Route::view('/testimonial', 'frontend.testimonial.index')
    ->name('testimonial');
Route::view('/blog', 'frontend.blog.index')
    ->name('blog');

Route::view('/contact', 'frontend.contact.index')
    ->name('contact');
    /*
|--------------------------------------------------------------------------
| Cart
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->group(function () {

        Route::get('/cart', [CartController::class, 'index'])
            ->name('cart.index');

        Route::post('/cart/add/{product}', [CartController::class, 'add'])
            ->name('cart.add');

        Route::delete('/cart/remove/{item}', [CartController::class, 'remove'])
            ->name('cart.remove');

        Route::get('/cart/checkout', [CartController::class, 'checkout'])
            ->name('cart.checkout');

    });

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware([
    'auth',
    'admin'
])
->prefix('admin')
->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    /*
    |--------------------------------------------------------------------------
    | Produk
    |--------------------------------------------------------------------------
    */

    Route::get('/products', [AdminProductController::class, 'index'])
        ->name('admin.products.index');

    Route::get('/products/create', [AdminProductController::class, 'create'])
        ->name('admin.products.create');

    Route::post('/products', [AdminProductController::class, 'store'])
        ->name('admin.products.store');

    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])
        ->name('admin.products.edit');

    Route::put('/products/{product}', [AdminProductController::class, 'update'])
        ->name('admin.products.update');

    Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])
        ->name('admin.products.destroy');

    /*
    |--------------------------------------------------------------------------
    | Kategori
    |--------------------------------------------------------------------------
    */

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('admin.categories.index');

    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->name('admin.categories.create');

    Route::post('/categories', [CategoryController::class, 'store'])
        ->name('admin.categories.store');

    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
        ->name('admin.categories.edit');

    Route::put('/categories/{category}', [CategoryController::class, 'update'])
        ->name('admin.categories.update');

    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])
        ->name('admin.categories.destroy');

    /*
    |--------------------------------------------------------------------------
    | Testimoni
    |--------------------------------------------------------------------------
    */

    Route::get('/testimoni', [TestimoniController::class, 'index'])
        ->name('admin.testimoni.index');

});

require __DIR__ . '/auth.php';