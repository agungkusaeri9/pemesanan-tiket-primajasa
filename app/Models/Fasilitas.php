<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table  = 'armada_fasilitas';
    protected $guarded = ['id'];

    public function icon()
    {
        $icon = $this->icon ? asset('storage/' . $this->icon) : asset('assets/fe/img/icon-default.svg');
        return $icon;
    }

    public function armada()
    {
        return $this->belongsTo(JenisArmada::class,'jenis_armada_id','id');
    }
}
