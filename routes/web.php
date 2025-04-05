<?php

use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::prefix('category')->group(function () {
    Route::get('{category_name}', [ProductController::class, 'category']);
});
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('/sales', [SalesController::class, 'sales']);

//ROUTE CONTROLLER Praktikum 4
Route::get('/', function() {
    return view('welcome');
});

Route:: get('/level', [LevelController:: class, 'index']);