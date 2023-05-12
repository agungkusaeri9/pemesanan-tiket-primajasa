<?php

namespace App\Http\Controllers;

use App\Models\PengaduanBarangHilang;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PengaduanBarangHilangController extends Controller
{
    public function index()
    {
        $items = PengaduanBarangHilang::with('jadwal')->where('user_id',auth()->id())->latest()->get();
        return view('pages.pengaduan-barang-hilang.index',[
            'title' => 'Pengaduan Barang Hilang',
            'items' => $items
        ]);
    }

    public function create()
    {
        $pesanans = Pesanan::where('status',1)->where('user_id',auth()->id())->latest()->get();
        return view('pages.pengaduan-barang-hilang.create',[
            'title' => 'Buat Pengaduan Barang Hilang',
            'pesanans' => $pesanans
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama_barang' => ['required'],
            'foto_barang' => ['image']
        ]);


        PengaduanBarangHilang::create([
            'user_id' => auth()->id(),
            'tanggal_berangkat' => request('tanggal_berangkat'),
            'armada_jadwal_id' => request('armada_jadwal_id'),
            'nama_barang' => request('nama_barang'),
            'foto_barang' => request()->file('foto_barang') ? request()->file('foto_barang')->store('pengaduan-barang-hilang','public') : NULL
        ]);

        return redirect()->route('pengaduan-barang-hilang.index')->with('success','Pengaduan Barang Hilang berhasil di tambahkan.');
    }
}
