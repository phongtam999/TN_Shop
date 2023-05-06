<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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


//Đây là phần categories
Route::get('categories/xuatexcel', [CategoryController::class, 'exportExcel'])->name('categories.export');
Route::resource('categories', CategoryController::class);
Route::get('/categories', function () {
    return view('admin.categories.index');
});
Route::resource('products', ProductController::class);
