<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LayananController;
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
Route::get('/layanan',[LayananController::class,'index'])->name('layanan.index');
Route::get('/tiket',[TiketController::class,'index'])->name('tiket.index');
Route::post('/jadwal-get',[JadwalController::class,'getByArmada'])->name('jadwal.getbyarmada');
Route::post('/jadwal-tujuan-get',[JadwalController::class,'getTujuanByPemberangkatan'])->name('jadwal.gettujuanbypemberangkatan');
Route::get('tiket/info',[TiketController::class,'info'])->name('tiket.info');
Route::get('tiket/detail/',[TiketController::class,'detail'])->name('pemesanan-tiket-detail');


Route::middleware('auth')->group(function(){
    Route::get('profile',[ProfileController::class,'index'])->name('profile.index');
    Route::post('profile',[ProfileController::class,'update'])->name('profile.update');
});
