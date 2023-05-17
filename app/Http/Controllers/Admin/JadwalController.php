<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\JenisArmada;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jenis_armada_id = request('jenis_armada_id');
        if (!$jenis_armada_id) {
            return redirect()->route('admin.jenis-armada.index');
        }
        $items = Jadwal::with('armada')->where('jenis_armada_id', $jenis_armada_id)->get();
        return view('admin.pages.jadwal.index', [
            'title' => 'Data Jadwal Armada',
            'items' => $items,
            'armada' => JenisArmada::findOrFail($jenis_armada_id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_armada_id = request('jenis_armada_id');
        if (!$jenis_armada_id) {
            return redirect()->route('admin.jadwal.index', [
                'jenis_armada_id' => $fasilitas->jenis_armada_id
            ]);
        }
        return view('admin.pages.jadwal.create', [
            'title' => 'Tambah Jadwal',
            'armada' => JenisArmada::findOrFail($jenis_armada_id)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'terminal_pemberangkatan' => ['required'],
            'pemberangkatan' => ['required'],
            'terminal_tujuan' => ['required'],
            'tujuan' => ['required'],
            'jam_berangkat' => ['required'],
            'jam_sampai' => ['required'],
            'harga_dewasa' => ['required'],

        ]);


        $data = request()->all();
        $jadwal = Jadwal::create($data);

        return redirect()->route('admin.jadwal.index', [
            'jenis_armada_id' => $jadwal->jenis_armada_id
        ])->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis_armada_id = request('jenis_armada_id');
        if (!$jenis_armada_id) {
            return redirect()->route('admin.jenis-armada.index');
        }
        $item = Jadwal::findOrFail($id);
        return view('admin.pages.jadwal.edit', [
            'title' => 'Edit Jadwal',
            'item' => $item,
            'armada' => JenisArmada::findOrFail($jenis_armada_id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'terminal_pemberangkatan' => ['required'],
            'pemberangkatan' => ['required'],
            'terminal_tujuan' => ['required'],
            'tujuan' => ['required'],
            'jam_berangkat' => ['required'],
            'jam_sampai' => ['required'],
            'harga_dewasa' => ['required'],

        ]);

        $data = request()->all();
        $item = Jadwal::findOrFail($id);
        $item->update($data);

        return redirect()->route('admin.jadwal.index', [
            'jenis_armada_id' => $item->jenis_armada_id
        ])->with('success', 'Jadwal berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jenis_armada_id = request('jenis_armada_id');
        if (!$jenis_armada_id) {
            return redirect()->route('admin.jenis-armada.index');
        }
        $item = Jadwal::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.jadwal.index', [
            'jenis_armada_id' => $jenis_armada_id
        ])->with('success', 'Jadwal berhasil dihapus.');
    }
}
