<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\CartController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    // Route::post('/logout',)->middleware('auth:api');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});


Route::resource('products',ProductController::class);
Route::get('carts',[CartController::class,'getAllCart']);
Route::get('products',[ProductController::class,'index']);
Route::post('add_to_cart',[CartController::class,'addToCart']);
Route::put('update_cart',[CartController::class,'update']);
// Route::delete('remove_cart',[CartController::class,'remove']);
Route::delete('carts/remove_cart/{id}',[CartController::class,'removeToCart']);
Route::get('category_list',[ProductController::class,'category_list']);
Route::get('products/{id}',[ProductController::class,'product_detail']);

Route::apiResource('categories',CategoryController::class);
Route::apiResource('products',ProductController::class);
Route::apiResource('users',UserController::class);
Route::apiResource('customers',CustomerController::class);
Route::apiResource('groups',GroupController::class);

