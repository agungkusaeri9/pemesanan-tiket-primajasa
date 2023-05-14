<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table  = 'pesanan';
    protected $guarded = ['id'];
    public $dates = ['tanggal_berangkat'];

    public function detail()
    {
        return $this->hasMany(PesananDetail::class,'pesanan_id','id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class,'armada_jadwal_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function status()
    {
        if($this->status == 0)
        {
            return '<span class="badge badge-warning">Belum Bayar</span>';
        }else{
            return '<span class="badge badge-success">Lunas</span>';
        }
    }
}
