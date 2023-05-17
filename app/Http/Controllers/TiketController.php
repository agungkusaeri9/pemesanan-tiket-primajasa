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
        $data_jenis_armada = JenisArmada::orderBy('jenis_armada', 'ASC')->get();
        return view('pages.tiket.index', [
            'title' => 'Pilih Tujuan',
            'data_jenis_armada' => $data_jenis_armada
        ]);
    }

    public function info()
    {
        $armada_id = request('armada_id');
        $tanggal = request('tanggal');
        $pemberangkatan = request('pemberangkatan');
        $tujuan = request('tujuan');
        $anak = request('anak');
        $dewasa = request('dewasa');
        $jam_berangkat = request('jam_berangkat');
        $jam_sampai = request('jam_sampai');

        $tanggal = Carbon::parse(request('tanggal'))->translatedFormat('l, d F Y');



        $jadwal = Jadwal::latest();
        // cek jadwal berangkat
        if ($jam_berangkat === 'pagi') {
            $jadwal->whereIn('jam_berangkat', ['00.00', '00.30', '01.00', '01.30', '02.00', '02.30', '03.00', '03.30', '04.00', '04.30', '05.00', '05.30', '06.00']);
        } elseif ($jam_berangkat === 'siang') {
            $jadwal->whereIn('jam_berangkat', ['06.00', '06.30', '07.00', '07.30', '08.00', '08.30', '09.00', '09.30', '10.00', '10.30', '11.00', '11.30', '12.00']);
        } elseif ($jam_berangkat === 'sore') {
            $jadwal->whereIn('jam_berangkat', ['12.00', '12.30', '13.00', '13.30', '14.00', '14.30', '15.00', '15.30', '16.00', '16.30', '17.00', '17.30', '18.00']);
        } elseif ($jam_berangkat === 'malam') {
            $jadwal->whereIn('jam_berangkat', ['18.00', '18.30', '19.00', '19.30', '20.00', '20.30', '21.00', '21.30', '22.00', '22.30', '23.00', '23.30', '24.00']);
        }

        if ($jam_sampai === 'pagi') {
            $jadwal->whereIn('jam_sampai', ['00.00', '00.30', '01.00', '01.30', '02.00', '02.30', '03.00', '03.30', '04.00', '04.30', '05.00', '05.30', '06.00']);
        } elseif ($jam_sampai === 'siang') {
            $jadwal->whereIn('jam_sampai', ['06.00', '06.30', '07.00', '07.30', '08.00', '08.30', '09.00', '09.30', '10.00', '10.30', '11.00', '11.30', '12.00']);
        } elseif ($jam_sampai === 'sore') {
            $jadwal->whereIn('jam_sampai', ['12.00', '12.30', '13.00', '13.30', '14.00', '14.30', '15.00', '15.30', '16.00', '16.30', '17.00', '17.30', '18.00']);
        } elseif ($jam_sampai === 'malam') {
            $jadwal->whereIn('jam_sampai', ['18.00', '18.30', '19.00', '19.30', '20.00', '20.30', '21.00', '21.30', '22.00', '22.30', '23.00', '23.30', '24.00']);
        }


        if ($pemberangkatan)
            $jadwal->where('pemberangkatan', $pemberangkatan);
        if ($tujuan)
            $jadwal->where('tujuan', $tujuan);


        $data = $jadwal->paginate(8);
        // dd($data);

        return view('pages.tiket.detail', [
            'title' => 'Pemesanan Tiket Detail',
            'jadwal' => $data,
            'pemberangkatan' => $pemberangkatan,
            'tujuan' => $tujuan,
            'anak' => $anak ?? 0,
            'dewasa' => $dewasa,
            'tanggal' => $tanggal
        ]);
    }
}
