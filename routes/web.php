<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dasboard', function () {
    return view('admin.layouts.master');
});

Route::get('/categories', function () {
    return view('admin.categories.index');
});

// Đây là phần Product
// Route::get('products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('products/xuatexcel', [ProductController::class, 'exportExcel'])->name('products.export');
Route::resource('products', ProductController::class);


