<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function create($id,$dewasa,$anak,$tanggal)
    {
        $jadwal = Jadwal::where('id',$id)->first();
        return view('pages.pesanan.create',[
            'title' => 'Buat Pesanan',
            'jadwal' => $jadwal,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'tanggal' => $tanggal
        ]);
    }
}
