<?php

namespace App\Http\Controllers;

use App\Models\JenisArmada;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $data_jenis_armada = JenisArmada::with('fasilitas')->latest()->get();
        return view('pages.layanan.index',[
            'title' => 'Layanan',
            'data_jenis_armada' => $data_jenis_armada
        ]);
    }
}
