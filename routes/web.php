<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/search', [ProductController::class, 'search'])->name('product.search');
});