<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MetodePembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $items = Pesanan::latest()->get();
        return view('admin.pages.pesanan.index',[
            'title' => 'Data Pesanan',
            'items' => $items
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pesanan::findOrFail($id);
        return view('admin.pages.pesanan.edit',[
            'title' => 'Edit Pesanan',
            'item' => $item,
            'metode_pembayaran' => MetodePembayaran::get()
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
            'metode_pembayaran_id' => ['required'],
            'status' => ['required']
        ]);
        $data = request()->only(['metode_pembayaran_id','status']);
        $item = Pesanan::findOrFail($id);
        $item->update($data);
        return redirect()->route('admin.pesanan.index')->with('success','Pesanan berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pesanan::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.pesanan.index')->with('success','Pesanan berhasil dihapus.');
    }
}
