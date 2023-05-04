<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisArmada extends Model
{
    use HasFactory;
    protected $table = 'jenis_armada';
    protected $guarded = ['id'];

    public function gambar()
    {
        $gambar = $this->gambar ? asset('storage/' . $this->gambar) : asset('assets/fe/img/bus-default.png');
        return $gambar;
    }

    public function fasilitas()
    {
        return $this->hasMany(Fasilitas::class,'jenis_armada_id','id');
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class,'jenis_armada_id','id');
    }
}
