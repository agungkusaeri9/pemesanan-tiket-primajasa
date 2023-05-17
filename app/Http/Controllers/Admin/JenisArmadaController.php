<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisArmada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JenisArmadaController extends Controller
{
    public function index()
    {
        $items = JenisArmada::orderBy('jenis_armada','ASC')->get();
        return view('admin.pages.jenis-armada.index',[
            'title' => 'Data Jenis Armada',
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.jenis-armada.create',[
            'title' => 'Tambah Jenis Armada'
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
            'jenis_armada' => ['required'],
            'supir' => ['required'],
            'gambar' => ['image']
        ]);


        $data = request()->only(['jenis_armada','supir']);
        request()->file('gambar') ? $data['gambar'] = request()->file('gambar')->store('jenis-armada','public') : NULL;
        $jenis_armada = JenisArmada::create($data);
        $fasilitas_icon = request()->file('fasilitas_icon');
        $fasilitas = request('fasilitas');
        foreach($fasilitas_icon as $key => $icon)
        {
            $jenis_armada->fasilitas()->create([
                'icon' => $icon ? $icon->store('icon','public') : NULL,
                'fasilitas' => $fasilitas[$key]
            ]);
        }
        return redirect()->route('admin.jenis-armada.index')->with('success','Jenis Armada berhasil ditambahkan.');
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
        $item = JenisArmada::findOrFail($id);
        return view('admin.pages.jenis-armada.edit',[
            'title' => 'Edit Jenis Armada',
            'item' => $item
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
            'jenis_armada' => ['required'],
            'supir' => ['required'],
            'gambar' => ['image']
        ]);


        $data = request()->only(['jenis_armada','supir']);
        $item = JenisArmada::findOrFail($id);
        if(request()->file('gambar'))
        {
            Storage::disk('public')->delete($item->gambar);
            $data['gambar'] = request()->file('gambar')->store('jenis-armada','public');
        }else{
            $data['gambar'] = $item->gambar;
        }
       $item->update($data);
        return redirect()->route('admin.jenis-armada.index')->with('success','Jenis Armada berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = JenisArmada::findOrFail($id);
        $item->gambar ?  Storage::disk('public')->delete($item->gambar) : NULL;
        $item->delete();
        return redirect()->route('admin.jenis-armada.index')->with('success','Jenis Armada berhasil dihapus.');
    }
}
