<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\GroupController;


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
  // thùng rác 
Route::get('categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
  // khôi phục 
  Route::get('categories/restore/{id}', [CategoryController::class, 'restore'])->name('categories.restore');
  // xóa vĩnh viễn 
  Route::get('categories/deleteforever/{id}', [CategoryController::class, 'deleteforever'])->name('categories.deleteforever');
Route::get('categories/xuatexcel', [CategoryController::class, 'exportExcel'])->name('categories.export');
Route::resource('categories', CategoryController::class);

// Đây là phần Product
Route::get('products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('products/trash', [ProductController::class, 'getTrashed'])->name('products.trash');
  // khôi phục 
  Route::get('products/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
  // xóa vĩnh viễn 
  Route::get('products/deleteforever/{id}', [ProductController::class, 'deleteforever'])->name('products.deleteforever');
Route::get('products/xuatexcel', [ProductController::class, 'exportExcel'])->name('products.export');
Route::resource('products', ProductController::class);

// Đây là phần User
Route::get('users/search', [UserController::class, 'search'])->name('users.search');
Route::resource('users', UserController::class);
// Đây là phần Group
Route::get('groups/detail/{id}', [GroupController::class, 'detail'])->name('groups.detail');
Route::put('groups/group_detail/{id}', [GroupController::class, 'group_detail'])->name('groups.group_detail');
Route::get('groups/search', [GroupController::class, 'search'])->name('groups.search');
Route::resource('groups', GroupController::class);
// Đây là phần Customer
Route::get('customers/search', [CustomerController::class, 'search'])->name('customers.search');
Route::resource('customers', CustomerController::class);
// Đây là Orderssearch
Route::get('orders/search', [OrderController::class, 'search'])->name('orders.search');
Route::get('orders/xuat', [OrderController::class, 'exportOrder'])->name('orders.xuat');
Route::resource('orders', OrderController::class);

