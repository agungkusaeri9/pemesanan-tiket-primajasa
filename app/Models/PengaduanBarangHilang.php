<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengaduanBarangHilang extends Model
{
    use HasFactory;
    protected $table = 'pengaduan_barang_hilang';
    protected $guarded = ['id'];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class,'armada_jadwal_id','id');
    }

    public function foto()
    {
        if(!$this->foto_barang)
        {
            return asset('assets/fe/img/bus-default.png');
        }else{
            return asset('storage/' . $this->foto_barang);
        }
    }

    public function status()
    {
        if($this->status == 0)
        {
            return '<span class="badge badge-secondary">Belum Diproses</span>';
        }elseif($this->status == 1)
        {
            return '<span class="badge badge-warning">Sedang Diproses</span>';
        }elseif($this->status == 2)
        {
            return '<span class="badge badge-success">Selesai</span>';
        }else{
            return '<span class="badge badge-danger">Tidak Dapat Diproses</span>';
        }
    }
}
