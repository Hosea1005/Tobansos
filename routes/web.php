<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/guru',[GuruController::class,'index']);
// Route::view('/siswa','v_siswa');
// Route::view('/user','v_user');

Auth::routes();


// Route::get('/keuangan', [KeuanganController::class, 'index'])->name('keuangan');





//Hak akses untuk admin
// Route::group(['middleware' => 'mahasiswa'], function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });

Route::get('/laporan', [App\Http\Controllers\HomeController::class, 'laporanAdmin']);
Route::get('/laporanAdmin', [App\Http\Controllers\HomeController::class, 'adminLaporan']);
Route::get('/laporanPenerima/{nip}', [App\Http\Controllers\HomeController::class, 'laporanPenerima']);
Route::get('/laporanMasyarakat', [App\Http\Controllers\HomeController::class, 'laporanMasyarakat']);
Route::get('/laporan/delete/{id_laporan}', [App\Http\Controllers\HomeController::class, 'deleteLaporan']);
Route::get('/laporanpenerima/detaillaporanpenerima/{id_laporan}', [App\Http\Controllers\HomeController::class, 'detailLaporanPenerima']);
Route::post('/laporanpenerima/updatelaporan/{id_laporan}', [App\Http\Controllers\HomeController::class, 'updateLaporan']);

Route::get('/transaksi', [App\Http\Controllers\HomeController::class, 'transaksiPetugas']);
Route::get('/transaksiAdmin', [App\Http\Controllers\HomeController::class, 'transaksiAdmin']);
Route::get('/transaksiAdmin/detailtransaksi/{id_transaksi}', [App\Http\Controllers\HomeController::class, 'detailTransaksiAdmin']);
Route::get('/transaksiPenerima', [App\Http\Controllers\HomeController::class, 'transaksiPenerima']);
Route::get('/transaksiMasyarakat', [App\Http\Controllers\HomeController::class, 'transaksiMasyarakat']);
Route::get('/transaksi/delete/{id_transaksi}', [App\Http\Controllers\HomeController::class, 'deleteTransaksi']);
Route::get('/transaksi/add', [App\Http\Controllers\HomeController::class, 'transaksiAdd']);
Route::post('/transaksi/inserttrans', [App\Http\Controllers\HomeController::class, 'insertTransaksi']);
Route::get('/transaksi/detailtransaksi/{id_transaksi}', [App\Http\Controllers\HomeController::class, 'detailTransaksi']);
Route::get('/transaksiPenerima/detailtransaksi/{id_transaksi}', [App\Http\Controllers\HomeController::class, 'detailTransaksiPenerima']);


Route::get('/pegawai', [App\Http\Controllers\HomeController::class, 'pegawaiPetugas']);
Route::get('/pegawaiAdmin', [App\Http\Controllers\HomeController::class, 'pegawaiAdmin']);
Route::get('/pegawai/detailpegawai/{id}', [App\Http\Controllers\HomeController::class, 'detailPegawai']);
Route::get('/pegawai/deletepegawai/{id}', [App\Http\Controllers\HomeController::class, 'deletePegawai']);
Route::get('/pegawaiPenerima', [App\Http\Controllers\HomeController::class, 'pegawaiPenerima']);
Route::get('/pegawai/add', [App\Http\Controllers\HomeController::class, 'pegawaiAdd']);
Route::post('/pegawai/insert', [App\Http\Controllers\HomeController::class, 'insertPegawai']);

Route::get('/bantuan/delete/{id_bantuan}', [App\Http\Controllers\HomeController::class, 'deleteBantuan']);
Route::get('/bantuan/add', [App\Http\Controllers\HomeController::class, 'bantuanAdd']);
Route::post('/bantuan/insertbantu', [App\Http\Controllers\HomeController::class, 'insertBantuan']);
Route::get('/bantuan/editbantuan/{id_bantuan}', [App\Http\Controllers\HomeController::class, 'editBantuan']);
Route::post('/bantuan/updatebantuan/{id_bantuan}', [App\Http\Controllers\HomeController::class, 'updateBantuan']);

Route::get('/bentuk/delete/{id_bb}', [App\Http\Controllers\HomeController::class, 'deleteBentuk']);
Route::get('/bentuk/add', [App\Http\Controllers\HomeController::class, 'bentukAdd']);
Route::post('/bentuk/insertbantu', [App\Http\Controllers\HomeController::class, 'insertBentuk']);
Route::get('/bentuk/editbantuan/{id_bb}', [App\Http\Controllers\HomeController::class, 'editBentuk']);
Route::post('/bentuk/updatebantuan/{id_bb}', [App\Http\Controllers\HomeController::class, 'updateBentuk']);


Route::get('/masyarakat', [App\Http\Controllers\HomeController::class, 'masyarakatView']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
