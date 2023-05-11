<?php

namespace App\Helpers;
use App\Models\Employees;
use App\Models\PesananDetail;

class Helper {

    public static function helperfunction1(){
        return "helper function 1 response";
    }

    public static function checkKursi($tanggal,$nomor_kursi){
        $cek = PesananDetail::whereHas('pesanan', function($q) use ($tanggal){
            $q->where('tanggal_berangkat',$tanggal);
        })->where('nomor_kursi',$nomor_kursi)->first();

        if($cek)
        {
            return true;
        }else{
            return false;
        }
    }
}
