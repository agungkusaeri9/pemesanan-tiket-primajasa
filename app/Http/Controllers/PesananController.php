<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pesanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Models\MetodePembayaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{

    public function index()
    {
        $items = Pesanan::where('user_id',auth()->id())->latest()->get();
        return view('pages.pesanan.index',[
            'title' => 'Riwayat Pesanan',
            'items' => $items
        ]);
    }

    public function create()
    {
        $id = request('id');
        $dewasa = request('dewasa');
        $anak = request('anak');
        $tanggal = request('tanggal');
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

        try {
            DB::beginTransaction();
            $data_penumpang = request('penumpang_nama_lengkap');
            $armada_jadwal_id = request('armada_jadwal_id');
            $jadwal = Jadwal::findOrFail($armada_jadwal_id);
            $harga_tiket = $jadwal->harga_dewasa;
            $jumlah_penumpang_dewasa = count($data_penumpang);
            $asuransi_perjalanan = request('asuransi_perjalanan') ? 15000 * $jumlah_penumpang_dewasa : 0;
            $convencience_fee_default = 7500;
            $handling_fee_default = 0;
            $total_harga = ($harga_tiket * $jumlah_penumpang_dewasa) + ($asuransi_perjalanan * $jumlah_penumpang_dewasa) + $convencience_fee_default + $handling_fee_default;
            $newCode = Pesanan::getNewCode();
            // create transaksi
            $pesanan = Pesanan::create([
                'kode' => $newCode,
                'nama' => auth()->user()->name,
                'metode_pembayaran_id' => NULL,
                'total' => $total_harga,
                'convenience_fee' => $convencience_fee_default,
                'handling_fee' => $handling_fee_default,
                'armada_jadwal_id' => $armada_jadwal_id,
                'status' => 0,
                'tanggal_berangkat' => request('tanggal'),
                'user_id' => auth()->id()
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
            return redirect()->route('pesanan.success',encrypt($pesanan->kode))->with('success', 'Anda berhasil memesan tiket. Silahkan lakukan pembayaran.');
        } catch (\Throwable $th) {
            throw $th;
            DB::rollBack();
        }
    }

    public function success($kode_pesanan_enkripsi)
    {
        $pesanan = Pesanan::where('kode',decrypt($kode_pesanan_enkripsi))->firstOrFail();
        return view('pages.pesanan.success',[
            'title' => 'Rincian Pembayaran',
            'pesanan' => $pesanan,
            'metode_pembayaran' => MetodePembayaran::get()
        ]);
    }

    public function update($id)
    {

        request()->validate([
            'metode_pembayaran_id' => ['required']
        ]);

        $item = Pesanan::findOrFail($id);
        $item->update([
            'metode_pembayaran_id' => request('metode_pembayaran_id')
        ]);

        return redirect()->route('pesanan.bayar',encrypt($item->kode))->with('success','Silahkan bayar terlebih dahulu');
    }


    public function bayar($kode_pesanan_enkripsi)
    {
        $pesanan = Pesanan::where('kode',decrypt($kode_pesanan_enkripsi))->firstOrFail();
        return view('pages.pesanan.bayar',[
            'title' => 'Rincian Pembayaran',
            'pesanan' => $pesanan
        ]);
    }

    public function show($kode)
    {
        $item = Pesanan::with(['detail','metode_pembayaran'])->where('user_id',auth()->id())->where('kode',$kode)->firstOrFail();

        return view('pages.pesanan.show',[
            'title' => 'Detial Tiket',
            'item' => $item
        ]);
    }
}
