<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'armada_jadwal';
    protected $guarded = ['id'];

    public function armada(){
        return $this->belongsTo(JenisArmada::class,'jenis_armada_id','id');
    }

}
