<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AuthController::class,'Login']);
Route::get('forgot',[AuthController::class,'forgot']);
Route::post('login_post',[AuthController::class,'login_post']);

Route::post('forgot_post',[AuthController::class,'forgot_post']);

Route::group(['middleware' => 'admin'],function(){

//admin

Route::get('admin/dashboard',[DashboardController::class,'Dashboard']);


//users
Route::get('admin/users',[UserController::class,'index']);
Route::get('admin/users/add',[UserController::class,'user_add']);
Route::post('admin/users/add',[UserController::class,'user_add_insert']);
Route::get('/admin/users/edit/{id}',[UserController::class,'EditUser']);
Route::post('/admin/users/update/{id}',[UserController::class,'UpdateUser']);
Route::get('/admin/users/delete/{id}',[UserController::class,'DeleteUser']);

//Products
Route::get('admin/products',[ProductController::class,'index']);
Route::get('admin/products/add',[ProductController::class,'product_add']);
Route::post('admin/products/add',[ProductController::class,'product_add_insert']);
Route::get('/admin/products/edit/{id}',[ProductController::class,'EditProduct']);
Route::post('/admin/products/update/{id}',[ProductController::class,'UpdateProduct']);
Route::get('/admin/products/delete/{id}',[ProductController::class,'DeleteProduct']);


});




Route::get('logout',[AuthController::class,'logout']);