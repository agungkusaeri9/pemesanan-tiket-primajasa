<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;

class PesananController extends Controller
{
    public function create($id, $dewasa, $anak, $tanggal)
    {
        $tanggal2 = Carbon::parse($tanggal)->translatedFormat('l, d F Y');
        $jadwal = Jadwal::where('id', $id)->first();
        return view('pages.pesanan.create', [
            'title' => 'Buat Pesanan',
            'jadwal' => $jadwal,
            'dewasa' => $dewasa,
            'anak' => $anak,
            'tanggal' => $tanggal,
            'tanggal2' => $tanggal2
        ]);
    }

    public function store()
    {

        DB::beginTransaction();
        try {
            $data_penumpang = request('penumpang_nama_lengkap');
            $armada_jadwal_id = request('armada_jadwal_id');
            $jadwal = Jadwal::findOrFail($armada_jadwal_id);
            $harga_tiket = $jadwal->harga_dewasa;
            $jumlah_penumpang_dewasa = count($data_penumpang);
            $asuransi_perjalanan = request('asuransi_perjalanan') ? 15000 * $jumlah_penumpang_dewasa : 0;
            $convencience_fee_default = 7500;
            $handling_fee_default = 0;
            $total_harga = ($harga_tiket * $jumlah_penumpang_dewasa) + ($asuransi_perjalanan * $jumlah_penumpang_dewasa) + $convencience_fee_default + $handling_fee_default;
            // create transaksi
            $pesanan = Pesanan::create([
                'kode' => Carbon::now()->format('YmdHis') . rand(1, 200),
                'nama' => auth()->user()->name,
                'metode_pembayaran' => NULL,
                'total' => $total_harga,
                'convenience_fee' => $convencience_fee_default,
                'handling_fee' => $handling_fee_default,
                'armada_jadwal_id' => $armada_jadwal_id,
                'status' => 0,
                'tanggal_berangkat' => request('tanggal')
            ]);

            $data_nik = request('penumpang_nik');
            $data_nomor_kursi = request('penumpang_nomor_kursi');
            $data_title = request('penumpang_title');

            foreach ($data_penumpang as $key => $penumpang) {
                $pesanan->detail()->create([
                    'nama_lengkap' => $penumpang,
                    'nik' => $data_nik[$key],
                    'title' => $data_title[$key],
                    'nomor_kursi' => $data_nomor_kursi[$key],
                    'harga_tiket' => $jadwal->harga_dewasa,
                    'asuransi_perjalanan' => $asuransi_perjalanan,
                    'total' => $asuransi_perjalanan + $jadwal->harga_dewasa
                ]);
            }
            DB::commit();
            return redirect()->back()->with('success', 'Anda berhasil memesan tiket. Silahkan lakukan pembayaran.');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
        }
    }
}
