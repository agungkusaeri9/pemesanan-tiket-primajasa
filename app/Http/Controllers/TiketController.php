<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JenisArmada;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
        $data_jenis_armada = JenisArmada::orderBy('jenis_armada','ASC')->get();
        return view('pages.tiket.index',[
            'title' => 'Pilih Tujuan',
            'data_jenis_armada' => $data_jenis_armada
        ]);
    }

    public function info()
    {
        // request()->validate([
        //     'armada_id' => ['required'],
        //     'pemberangkatan' => ['required'],
        //     'tujuan' => ['required']
        // ]);

        $armada_id = request('armada_id');
        $tanggal = request('tanggal');
        $pemberangkatan = request('pemberangkatan');
        $tujuan = request('tujuan');
        $anak = request('anak');
        $dewasa = request('dewasa');
        $tanggal = Carbon::parse(request('tanggal'))->translatedFormat('l, d F Y');
        $jadwal = Jadwal::where('jenis_armada_id',$armada_id)->where('pemberangkatan',$pemberangkatan)->where('tujuan',$tujuan)->firstOrFail();

        // if($anak < 1 || $dewasa < 1)
        // {
        //     return redirect()->back()->with('error','Silahkan masukan jumlah orang dewasa atau anak');
        // }

        return view('pages.tiket.detail',[
            'title' => 'Pemesanan Tiket Detail',
            'jadwal' => $jadwal,
            'pemberangkatan' => $pemberangkatan,
            'tujuan' => $tujuan,
            'anak' => $anak ?? 0,
            'dewasa' => $dewasa,
            'tanggal' => $tanggal
        ]);
    }
}
