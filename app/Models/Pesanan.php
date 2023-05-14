<?php

namespace App\Models;

use Carbon\Carbon;
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
        return $this->hasMany(PesananDetail::class, 'pesanan_id', 'id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'armada_jadwal_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function metode_pembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id', 'id');
    }

    public function status()
    {
        if ($this->status == 0) {
            return '<span class="badge badge-warning">Belum Bayar</span>';
        } else {
            return '<span class="badge badge-success">Lunas</span>';
        }
    }

    public function scopeGetNewCode()
    {
        $item = $this->latest()->first();
        if ($item) {
            $code_date = \Str::substr($item->kode, 0, 8);
            $current_date = Carbon::now()->translatedFormat('Ymd');
            if ($code_date === $current_date) {
                $code_latest = \Str::substr($item->kode, 8);
                $new_code = $code_date . str_pad(($code_latest + 1), 3, "0", STR_PAD_LEFT);
            } else {
                $current_date = Carbon::now()->translatedFormat('Ymd');
                $new_code = $current_date . str_pad(1, 3, "0", STR_PAD_LEFT);
            }
        } else {
            $current_date = Carbon::now()->translatedFormat('Ymd');
            $new_code = $current_date . str_pad(1, 3, "0", STR_PAD_LEFT);
        }
        return $new_code;
    }
}
