<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProductController;
use App\Models\Penjualan;

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

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => ['check.role:admin']], function() {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/get-data-penjualan', 'HomeController@getDataPenjualan')->name('get-data-penjualan');
        Route::get('/get-data-kategori-penjualan', 'HomeController@getDataPenjualanKategori')->name('get-data-kategori-penjualan');
        Route::get('/', function () {
            return view('home');
        });

        Route::get('/welcome', function () {
            return view('welcome');
        });

        //Satuan
        Route::group(['prefix' => 'satuan'], function() {
            Route::get('/', [SatuanController::class, 'index'])->name('satuan.index');

            Route::get('/add', [SatuanController::class, 'add'])->name('satuan.add');
            Route::post('/add', [SatuanController::class, 'addSave'])->name('satuan.add.save');

            Route::get('/edit/{id}', [SatuanController::class, 'edit'])->name('satuan.edit');
            Route::post('/edit/{id}',[SatuanController::class, 'editSave'])->name('satuan.edit.save');

            Route::post('/delete/{id}',[SatuanController::class, 'delete'])->name('satuan.delete');
        });

        //user
        Route::group(['prefix' => 'user'], function() {
            Route::get('/', [UserController::class, 'index'])->name('user.index');

            Route::get('/add', [UserController::class, 'add'])->name('user.add');
            Route::post('/add', [UserController::class, 'addSave'])->name('user.add.save');

            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('/edit/{id}',[UserController::class, 'editSave'])->name('user.edit.save');

            Route::post('/delete/{id}',[UserController::class, 'delete'])->name('user.delete');
        });

        //Kategori
        Route::group(['prefix' => 'kategori'], function() {
            Route::get('/', [KategoriProdukController::class, 'index'])->name('kategori.index');
            Route::get('/add', [KategoriProdukController::class, 'add'])->name('kategori.add');
            Route::post('/add', [KategoriProdukController::class, 'addSave'])->name('kategori.add.save');
            Route::get('/edit/{id}', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
            Route::post('/edit/{id}',[KategoriProdukController::class, 'editSave'])->name('kategori.edit.save');
            Route::post('/delete/{id}',[KategoriProdukController::class, 'delete'])->name('kategori.delete');
        });

    });

    Route::get('/welcome', function () {
        return view('welcome');
    });

    Route::group(['prefix' => 'product'], function() {
        /* ---- DASHBOARD ---- */

        /* ---- PRODUK ---- */
        Route::get('/produk/list', 'ProductController@produk_list')->name('produk-list');
        Route::get('/produk/block', 'ProductController@produk_block')->name('produk-block');
        Route::get('/produk/tambah', 'ProductController@produk_tambah')->name('produk-tambah');
        Route::post('/produk/savetambah', 'ProductController@produk_savetambah')->name('produk-savetambah');
        Route::get('/{id}/produk/edit', 'ProductController@produk_edit')->name('produk-edit');
        Route::post('/{id}/produk/saveedit', 'ProductController@produk_saveedit')->name('produk-saveedit');
        Route::post('/{id}/produk/delete', 'ProductController@produk_delete')->name('produk-delete');

        Route::get('/produk/sampah', 'ProductController@produk_sampah')->name('produk-sampah');
        Route::get('/{id}/produk/restore', 'ProductController@produk_restore')->name('produk-restore');
        Route::post('/{id}/produk/forcedelete', 'ProductController@produk_forcedelete')->name('produk-forcedelete');

        Route::get('/produk/restoreall', 'ProductController@produk_restoreall')->name('produk-restoreall');
        Route::post('/produk/forcedeleteall', 'ProductController@produk_forcedeleteall')->name('produk-forcedeleteall');

        Route::post('/produk/delete/checked', [ProductController::class, 'deleteChecked'])->name('produk-delete-checked');
        
        
    Route::group(['middleware' => ['check.role:kasir']], function() {
        //Penjualan
        Route::group(['prefix' => 'penjualan'], function() {
            Route::get('/', 'PenjualanController@index')->name('penjualan.index');
            Route::post('/store', 'PenjualanController@store')->name('penjualan.store');
            Route::get('/array', 'PenjualanController@array')->name('penjualan.array');
        });

        Route::group(['prefix' => 'product'], function() {
            Route::get('/get-all-data', 'ProductController@getAllData')->name('product.get-all-data');
        });
    });
});

});

Auth::routes(['register' => false]);

// Route::get('/array', 'PenjualanController@array')
Route::get('/array', function() {
    $array = Penjualan::all(['tgl_transaksi', 'total_pembelian']);
    return $array;
});