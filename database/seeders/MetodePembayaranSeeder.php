<?php

namespace Database\Seeders;

use App\Models\MetodePembayaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetodePembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetodePembayaran::create([
            'nama' => 'Mandiri',
            'jenis' => 'Bank Transfer',
            'nomor' => 1748891231231,
            'pemilik' => 'Admin'
        ]);

        MetodePembayaran::create([
            'nama' => NULL,
            'jenis' => 'Cash',
            'nomor' => NULL,
            'pemilik' => NULL
        ]);

        MetodePembayaran::create([
            'nama' => NULL,
            'jenis' => 'Kartu Kredit/Debit',
            'nomor' => NULL,
            'pemilik' => NULL
        ]);
    }
}
