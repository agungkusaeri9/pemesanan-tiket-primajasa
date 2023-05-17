<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\JadwalController as AdminJadwalController;
use App\Http\Controllers\Admin\JenisArmadaController;
use App\Http\Controllers\Admin\MetodePembayaranController;
use App\Http\Controllers\Admin\PesananController as AdminPesananController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengaduanBarangHilang;
use App\Http\Controllers\PengaduanBarangHilangController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/faq',FaqController::class)->name('faq');
Route::get('/layanan',[LayananController::class,'index'])->name('layanan.index');
Route::get('/tiket',[TiketController::class,'index'])->name('tiket.index');
Route::post('/jadwal-get',[JadwalController::class,'getByArmada'])->name('jadwal.getbyarmada');
Route::post('/jadwal-tujuan-get',[JadwalController::class,'getTujuanByPemberangkatan'])->name('jadwal.gettujuanbypemberangkatan');
Route::get('tiket/info',[TiketController::class,'info'])->name('tiket.info');
Route::get('tiket/detail/',[TiketController::class,'detail'])->name('pemesanan-tiket-detail');

Route::get('pesanan/create',[PesananController::class,'create'])->name('pesanan.create');
Route::post('pesanan/create',[PesananController::class,'store'])->name('pesanan.store');
Route::middleware('auth')->group(function(){
    Route::get('change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
    Route::post('change-password',[ChangePasswordController::class,'update'])->name('change-password.update');
    Route::get('pengaduan-barang-hilang',[PengaduanBarangHilangController::class,'index'])->name('pengaduan-barang-hilang.index');
    Route::get('pengaduan-barang-hilang/create',[PengaduanBarangHilangController::class,'create'])->name('pengaduan-barang-hilang.create');
    Route::post('pengaduan-barang-hilang/create',[PengaduanBarangHilangController::class,'store'])->name('pengaduan-barang-hilang.store');

    // pesanan
    Route::get('pesanan',[PesananController::class,'index'])->name('pesanan.index');
    Route::get('pesanan/{pesanan_id}/success',[PesananController::class,'success'])->name('pesanan.success');
    Route::get('pesanan/{pesanan_id}/bayar',[PesananController::class,'bayar'])->name('pesanan.bayar');
    Route::patch('pesanan/{pesanan_id}/edit',[PesananController::class,'update'])->name('pesanan.update');
    Route::get('pesanan/{kode}',[PesananController::class,'show'])->name('pesanan.show');


    Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
    Route::post('profile',[ProfileController::class,'update'])->name('profile.update');
});



// admin
Route::middleware(['auth','is_admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('metode-pembayaran', MetodePembayaranController::class);
    Route::resource('users', UserController::class);
    Route::resource('pesanan', AdminPesananController::class);
    Route::resource('jenis-armada', JenisArmadaController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('jadwal', AdminJadwalController::class);
});
