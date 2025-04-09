<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
// use App\Http\Controllers\UserControllerP6;

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
Route:: get('/kategori', [KategoriController:: class, 'index']);
// Route:: get('/user', [UserControllerP6:: class, 'index']);
Route:: get('/user', [UserController:: class, 'index']);
// Route:: get( '/user/tambah', [UserController::class, 'tambah']);
// Route:: post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user.tambah');
Route::get('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user.tambah_simpan');

Route:: get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route:: get('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('user.ubah_simpan');
Route:: get('/user/hapus/{id}', [UserController::class, 'hapus']);
