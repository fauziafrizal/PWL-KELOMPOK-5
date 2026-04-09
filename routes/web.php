<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/produk', function () {
    return view('admin.products');
})->name('admin.products');

Route::get('/admin/stok', function () {
    return view('admin.stock');
})->name('admin.stock');

Route::get('/admin/penjualan', function () {
    return view('admin.sales');
})->name('admin.sales');

Route::get('/admin/pelanggan', function () {
    return view('admin.customers');
})->name('admin.customers');

Route::get('/admin/laporan', function () {
    return view('admin.reports');
})->name('admin.reports');

Route::get('/admin/pengaturan', function () {
    return view('admin.settings');
})->name('admin.settings');

// Logout route
Route::post('/logout', function () {
    // For demo purposes, just redirect to welcome page
    // In real app, you'd handle authentication properly
    return redirect('/');
})->name('logout');
