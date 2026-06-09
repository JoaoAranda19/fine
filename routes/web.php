<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\MarketplacesController;
use App\Http\Controllers\ReportsController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');

Route::get('/marketplaces', [MarketplacesController::class, 'index'])->name('marketplaces.index');

Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
