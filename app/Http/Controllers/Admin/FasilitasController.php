<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fasilitas;
use App\Models\JenisArmada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $jenis_armada_id = request('jenis_armada_id');
        if (!$jenis_armada_id) {
            return redirect()->route('admin.fasilitas.index', [
                'jenis_armada_id' => $fasilitas->jenis_armada_id
            ]);
        }
        $items = Fasilitas::with('armada')->where('jenis_armada_id', $jenis_armada_id)->orderBy('fasilitas', 'ASC')->get();
        return view('admin.pages.fasilitas.index', [
            'title' => 'Data Fasilitas',
            'items' => $items,
            'armada' => JenisArmada::find($jenis_armada_id)
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
            return redirect()->route('admin.fasilitas.index', [
                'jenis_armada_id' => $fasilitas->jenis_armada_id
            ]);
        }
        return view('admin.pages.fasilitas.create', [
            'title' => 'Tambah Fasilitas',
            'armada' => JenisArmada::find($jenis_armada_id)
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
            'fasilitas' => ['required'],
            'icon' => ['required', 'image']
        ]);


        $data = request()->only(['fasilitas', 'jenis_armada_id']);
        request()->file('icon') ? $data['icon'] = request()->file('icon')->store('jfasilitas', 'public') : NULL;
        $fasilitas = Fasilitas::create($data);

        return redirect()->route('admin.fasilitas.index', [
            'jenis_armada_id' => $fasilitas->jenis_armada_id
        ])->with('success', 'Fasilitas berhasil ditambahkan.');
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
        $item = Fasilitas::findOrFail($id);
        return view('admin.pages.fasilitas.edit', [
            'title' => 'Edit Fasilitas',
            'item' => $item,
            'armada' => JenisArmada::find($jenis_armada_id)
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
            'fasilitas' => ['required'],
            'gambar' => ['image'],
            'jenis_armada_id' => ['required']
        ]);


        $data = request()->only(['jenis_armada_id', 'fasilitas']);
        $item = Fasilitas::findOrFail($id);
        if (request()->file('icon')) {
            $item->icon ? Storage::disk('public')->delete($item->icon) : '';
            $data['icon'] = request()->file('icon')->store('fasilitas', 'public');
        } else {
            $data['icon'] = $item->icon;
        }
        $item->update($data);
        return redirect()->route('admin.fasilitas.index', [
            'jenis_armada_id' => $item->jenis_armada_id
        ])->with('success', 'Fasilitas berhasil disimpan.');
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
        $item = Fasilitas::findOrFail($id);
        $item->icon ?  Storage::disk('public')->delete($item->icon) : NULL;
        $item->delete();
        return redirect()->route('admin.fasilitas.index', [
            'jenis_armada_id' => $jenis_armada_id
        ])->with('success', 'Fasilitas berhasil dihapus.');
    }
}
