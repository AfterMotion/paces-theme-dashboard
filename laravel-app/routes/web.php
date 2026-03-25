<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function () {
    Route::get('/', fn() => view('admin.dashboard.ecommerce'));
    Route::get('/analytics', fn() => view('admin.dashboard.analytics'));
    Route::get('/crm', fn() => view('admin.dashboard.crm'));
    Route::get('/finance', fn() => view('admin.dashboard.finance'));
    Route::get('/projects', fn() => view('admin.dashboard.projects'));

    // Products
    Route::prefix('products')->group(function () {
        Route::get('/', fn() => view('admin.ecommerce.products.index'));
        Route::get('/grid', fn() => view('admin.ecommerce.products.grid'));
        Route::get('/{id}/details', fn($id) => view('admin.ecommerce.products.details', compact('id')));
        Route::get('/product-add', fn() => view('admin.ecommerce.products.product-add'));
    });

    // Categories
    Route::prefix('categories')->group(function () {
        Route::get('/', fn() => view('admin.ecommerce.categories.index'));
    });
    
    // orders
    Route::prefix('orders')->group(function () {
        Route::get('/', fn() => view('admin.ecommerce.orders.index'));
        Route::get('/add', fn() => view('admin.ecommerce.orders.add-order'));
        Route::get('/{id}/details', fn($id) => view('admin.ecommerce.orders.details', compact('id')));
    });
    

});
