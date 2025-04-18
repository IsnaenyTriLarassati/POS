<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'index']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);              //Menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);          //Menampilkan data user dalam bentuk json untuk database
    Route::get('/create', [UserController::class, 'create']);       //Menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);             //Menyimpan data user baru
    Route::get('/create_ajax', [UserController:: class, 'create_ajax']);        //Menampilkan halaman form tambahan user ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']);                //Menyimpan data user baru ajax
    Route::get('/{id}', [UserController::class, 'show']);           //Menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      //Menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);         //Manyimpan perubahan data user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']);        //Menampilkan halaman form edit user ajax
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']);    //Menyipan perubahan data user ajax
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   //Untuk tampilkan from confirm delete user ajax
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); //User hapus data user Ajax
    Route::delete('/{id}', [UserController::class, 'destroy']);     //Menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('level.index');            // Menampilkan daftar level
    Route::post('/list', [LevelController::class, 'getLevels'])->name('level.list');    // DataTables JSON
    Route::get('/create', [LevelController::class, 'create'])->name('level.create');    // Form tambah
    Route::post('/', [LevelController::class, 'store'])->name('level.store');           // Simpan data baru
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']);                            // Menampilkan halaman form tambah level Ajax
    Route::post('/ajax', [LevelController::class, 'store_ajax']);                                   // Menyimpan data level baru Ajax
    Route::get('/{id}', [LevelController::class, 'show'])->name('level.show');          // Menampilkan detail level
    Route::get('/{id}/edit', [LevelController::class, 'edit'])->name('level.edit');     // Form edit
    Route::put('/{id}', [LevelController::class, 'update'])->name('level.update');      // Simpan perubahan
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax'])->name('level.edit_ajax');          // Form edit (AJAX)
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax'])->name('level.update_ajax');    // Simpan perubahan (AJAX)
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax'])->name('level.confirm_ajax'); 
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax'])->name('level.delete_ajax');
    Route::delete('/{id}', [LevelController::class, 'destroy'])->name('level.destroy'); // Hapus level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index'])->name('kategori.index');              // Menampilkan daftar kategori
    Route::post('/list', [KategoriController::class, 'getKategori'])->name('kategori.list');    // Data JSON untuk DataTables
    Route::get('/create', [KategoriController::class, 'create'])->name('kategori.create');      // Form tambah kategori
    Route::post('/', [KategoriController::class, 'store'])->name('kategori.store');             // Simpan kategori baru
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax'])->name('kategori.create_ajax');   // Form tambah kategori (AJAX)
    Route::post('/ajax', [KategoriController::class, 'store_ajax'])->name('kategori.store_ajax');           // Simpan kategori baru (AJAX)
    Route::get('/{id}', [KategoriController::class, 'show'])->name('kategori.show');            // Detail kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');       // Form edit kategori
    Route::put('/{id}', [KategoriController::class, 'update'])->name('kategori.update');        // Simpan perubahan kategori
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax'])->name('kategori.edit_ajax');            // Form edit kategori (AJAX)
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax'])->name('kategori.update_ajax');      // Simpan perubahan kategori (AJAX)
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax'])->name('kategori.confirm_ajax');    // Konfirmasi hapus (AJAX)
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax'])->name('kategori.delete_ajax');   // Hapus kategori (AJAX)
    Route::delete('/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');   // Hapus kategori
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index'])->name('barang.index');
    Route::post('/list', [BarangController::class, 'getBarang'])->name('barang.list');
    Route::get('/create', [BarangController::class, 'create'])->name('barang.create');
    Route::post('/', [BarangController::class, 'store'])->name('barang.store');
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
    Route::post('/ajax', [BarangController::class, 'store_ajax']);
    Route::get('/{id}', [BarangController::class, 'show'])->name('barang.show');
    Route::get('/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
    Route::put('/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
    Route::delete('/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index']);
    Route::post('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});
