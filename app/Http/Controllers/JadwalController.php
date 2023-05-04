<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function getByArmada()
    {
        $armada_id = request('armada_id');

        $jadwal = Jadwal::select('pemberangkatan')->where('jenis_armada_id',$armada_id)->groupBy('pemberangkatan')->get();
        if($jadwal){
            return response()->json([
                'status' => 'success',
                'data' => $jadwal
            ]);
        }else{
            return response()->json([
                'status' => 'success',
                'data' => []
            ]);
        }
    }

    public function getTujuanByPemberangkatan()
    {
        $armada_id = request('armada_id');
        $pemberangkatan = request('pemberangkatan');
        $jadwal = Jadwal::select('tujuan')->where('jenis_armada_id',$armada_id)->where('pemberangkatan',$pemberangkatan)->groupBy('tujuan')->get();
        if($jadwal){
            return response()->json([
                'status' => 'success',
                'data' => $jadwal
            ]);
        }else{
            return response()->json([
                'status' => 'success',
                'data' => []
            ]);
        }
    }
}
