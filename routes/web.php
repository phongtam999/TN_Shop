<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DashboardController;


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
//login

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/checkLogin', [AuthController::class, 'postLogin'])->name('checkLogin');
Route::get('/forget-password', [UserController::class, 'forget_password'])->name('forget-password');
// Route::post('/post_forgot_password', [AuthController::class, 'post_forgot_password'])->name('post_forgot_password');


Route::prefix('/')->middleware(['auth', 'PreventBackHistory'])->group(function () {
Route::get('/dasboard', [DashboardController::class, 'index'])->name('dashboard');;
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// quên mật khẩu gửi đến mail
Route::post('/sendmail', [UserController::class, 'sendMail'])->name('sendmail');

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
Route::get('users/profile', [UserController::class, 'profile'])->name('users.profile');
Route::resource('users', UserController::class);

Route::get('users/search', [UserController::class, 'search'])->name('users.search');
// Đây là phần Group
Route::resource('groups', GroupController::class);

Route::get('groups/detail/{id}', [GroupController::class, 'detail'])->name('groups.detail');
Route::put('groups/group_detail/{id}', [GroupController::class, 'group_detail'])->name('groups.group_detail');
Route::get('groups/search', [GroupController::class, 'search'])->name('groups.search');
Route::get('groups/{id}', [GroupController::class, 'destroy'])->name('groups.destroy');


// Đây là phần Customer
Route::get('customers/search', [CustomerController::class, 'search'])->name('customers.search');
Route::resource('customers', CustomerController::class);
// Đây là Orderssearch
Route::get('orders/index', [OrderController::class, 'index'])->name('orders.index');
Route::get('orders/xuat', [OrderController::class, 'exportOrder'])->name('orders.xuat');
Route::post('/trangthaidon', [OrderController::class,'trangthaidon']);
Route::get('orders/detail/{id}', [OrderController::class, 'show'])->name('orders.order_detail');


});

