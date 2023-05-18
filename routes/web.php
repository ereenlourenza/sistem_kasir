<?php

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
    return view('auth.login');
});

Route::get('/index', function () {
    return view('index');
});

//ambil data
use App\Http\Controllers\KaryawanController;

Route::get('/karyawan', [KaryawanController::class, 'karyawan']);

//tambah
Route::post('/karyawan/store', [KaryawanController::class, 'store']);

//delete
Route::get('/karyawan/hapus/{id}', [KaryawanController::class, 'hapus']);

//edit
Route::post('/karyawan/update', [KaryawanController::class, 'update']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);

use App\Http\Controllers\TransaksiController;

//ambil data
Route::get('/transaksi', [TransaksiController::class, 'transaksi']);
//tambah
Route::post('/transaksi/store', [TransaksiController::class, 'store']);
//edit
Route::post('/transaksi/update', [TransaksiController::class, 'update']);
Route::get('/transaksi/editL/{id}', [TransaksiController::class, 'edit']);
//delete
Route::get('/transaksi/hapus/{id}', [TransaksiController::class, 'hapus']);

use App\Http\Controllers\DetailTransaksiController;

//ambil data
Route::get('/transaksi', [DetailTransaksiController::class, 'detail_transaksi']);
//tambah
Route::post('/transaksi/store', [DetailTransaksiController::class, 'store']);
//edit
Route::post('/transaksi/update', [DetailTransaksiController::class, 'update']);
Route::get('/transaksi/editL/{id}', [DetailTransaksiController::class, 'edit']);
//delete
Route::get('/transaksi/hapus/{id}', [DetailTransaksiController::class, 'hapus']);

use App\Http\Controllers\LaporanController;

//ambil data
Route::get('/laporan', [LaporanController::class, 'laporan']);
//tambah
Route::post('/laporan/store', [LaporanController::class, 'store']);
//edit
Route::post('/laporan/update', [LaporanController::class, 'update']);
Route::get('/laporan/editL/{id}', [LaporanController::class, 'edit']);
//delete
Route::get('/laporan/hapus/{id}', [LaporanController::class, 'hapus']);

use App\Http\Controllers\InventoryController;

//ambil data
Route::get('/inventory', [InventoryController::class, 'inventory']);
//tambah
Route::post('/inventory/store', [inventoryController::class, 'store']);
//edit
Route::post('/inventory/update', [inventoryController::class, 'update']);
Route::get('/inventory/editI/{id}', [inventoryController::class, 'edit']);
//delete
Route::get('/inventory/hapus/{id}', [inventoryController::class, 'hapus']);


//login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
