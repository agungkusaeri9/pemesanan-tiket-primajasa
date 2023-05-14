<?php

use App\Http\Controllers\AboutController;
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

Route::get('pesanan/create/{idjadwal}/{jml_dewasa}/{jml_anak}/{tanggal}',[PesananController::class,'create'])->name('pesanan.create');

Route::middleware('auth')->group(function(){
    Route::get('pengaduan-barang-hilang',[PengaduanBarangHilangController::class,'index'])->name('pengaduan-barang-hilang.index');
    Route::get('pengaduan-barang-hilang/create',[PengaduanBarangHilangController::class,'create'])->name('pengaduan-barang-hilang.create');
    Route::post('pengaduan-barang-hilang/create',[PengaduanBarangHilangController::class,'store'])->name('pengaduan-barang-hilang.store');

    // pesanan
    Route::get('pesanan',[PesananController::class,'index'])->name('pesanan.index');
    Route::post('pesanan/create',[PesananController::class,'store'])->name('pesanan.store');
    Route::get('pesanan/{pesanan_id}/success',[PesananController::class,'success'])->name('pesanan.success');
    Route::get('pesanan/{pesanan_id}/bayar',[PesananController::class,'bayar'])->name('pesanan.bayar');
    Route::patch('pesanan/{pesanan_id}/edit',[PesananController::class,'update'])->name('pesanan.update');
    Route::get('pesanan/{kode}',[PesananController::class,'show'])->name('pesanan.show');


    Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
    Route::post('profile',[ProfileController::class,'update'])->name('profile.update');
});
