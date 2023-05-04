<?php

namespace Database\Seeders;

use App\Models\JenisArmada;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisArmadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $armada1 = JenisArmada::create([
            'jenis_armada' => 'Bus Reguler',
            'supir' => 'Deni M',
            'gambar' => NULL
        ]);
        $armada1->fasilitas()->create(['fasilitas' => 'AC']);
        $armada1->fasilitas()->create(['fasilitas' => 'Layout Kursi 2 - 2']);
        $armada1->fasilitas()->create(['fasilitas' => 'Reclining Seat']);
        $armada1->fasilitas()->create(['fasilitas' => 'Leg Rest']);
        $armada1->fasilitas()->create(['fasilitas' => 'Air Minum']);

        // jadwal
        $armada1->jadwal()->create(['pemberangkatan' => 'Bandung', 'tujuan' => 'Jakarta', 'jam_berangkat' => '06.00', 'jam_sampai' => '09.00', 'harga_dewasa' => 20000, 'harga_anak_anak' => 5000]);

        $armada1->jadwal()->create(['pemberangkatan' => 'Jakarta', 'tujuan' => 'Bandung', 'jam_berangkat' => '10.00', 'jam_sampai' => '13.00', 'harga_dewasa' => 20000, 'harga_anak_anak' => 5000]);

        $armada1->jadwal()->create(['pemberangkatan' => 'Bandung', 'tujuan' => 'Bekasi', 'jam_berangkat' => '16.00', 'jam_sampai' => '18.00', 'harga_dewasa' => 30000, 'harga_anak_anak' => 8000]);

        $armada1->jadwal()->create(['pemberangkatan' => 'Bekasi', 'tujuan' => 'Bandung', 'jam_berangkat' => '20.00', 'jam_sampai' => '22.00', 'harga_dewasa' => 30000, 'harga_anak_anak' => 8000]);

        $armada2 = JenisArmada::create([
            'jenis_armada' => 'Angkutan Pemadu Moda',
            'supir' => 'Tedi Sopandi',
            'gambar' => NULL
        ]);

        $armada2->fasilitas()->create(['fasilitas' => 'AC']);
        $armada2->fasilitas()->create(['fasilitas' => 'Layout Kursi 2 - 2']);
        $armada2->fasilitas()->create(['fasilitas' => 'TV']);
        $armada2->fasilitas()->create(['fasilitas' => 'Leg Rest']);
        $armada2->fasilitas()->create(['fasilitas' => 'Air Minum']);

        // jadwal
        $armada2->jadwal()->create(['pemberangkatan' => 'Tangerang Selatan', 'tujuan' => 'Karawang', 'jam_berangkat' => '06.00', 'jam_sampai' => '09.00', 'harga_dewasa' => 30000, 'harga_anak_anak' => 5000]);

        $armada2->jadwal()->create(['pemberangkatan' => 'Depok', 'tujuan' => 'Tangerang Selatan', 'jam_berangkat' => '09.00', 'jam_sampai' => '11.00', 'harga_dewasa' => 40000, 'harga_anak_anak' => 5000]);

        $armada2->jadwal()->create(['pemberangkatan' => 'Tangerang Selatan', 'tujuan' => 'jakarta Utara', 'jam_berangkat' => '13.00', 'jam_sampai' => '15.00', 'harga_dewasa' => 50000, 'harga_anak_anak' => 8000]);

        $armada2->jadwal()->create(['pemberangkatan' => 'Jakarta Utara', 'tujuan' => 'Tangerang Selatan', 'jam_berangkat' => '17.00', 'jam_sampai' => '19.00', 'harga_dewasa' => 30000, 'harga_anak_anak' => 8000]);

        $armada3 = JenisArmada::create([
            'jenis_armada' => 'Bus Pariwisata',
            'supir' => 'Yandi Sofyan',
            'gambar' => NULL
        ]);

        $armada3->fasilitas()->create(['fasilitas' => 'AC']);
        $armada3->fasilitas()->create(['fasilitas' => 'Layout Kursi 2 - 2']);
        $armada3->fasilitas()->create(['fasilitas' => 'Reclining Seat']);
        $armada3->fasilitas()->create(['fasilitas' => 'Leg Rest']);
        $armada3->fasilitas()->create(['fasilitas' => 'Air Minum']);
        $armada3->fasilitas()->create(['fasilitas' => 'TV']);

        // jadwal
        $armada3->jadwal()->create(['pemberangkatan' => 'Karawang', 'tujuan' => 'Bekasi', 'jam_berangkat' => '07.00', 'jam_sampai' => '09.00', 'harga_dewasa' => 25000, 'harga_anak_anak' => 5000]);

        $armada3->jadwal()->create(['pemberangkatan' => 'Bekasi', 'tujuan' => 'Karawang', 'jam_berangkat' => '11.00', 'jam_sampai' => '113.00', 'harga_dewasa' => 25000, 'harga_anak_anak' => 5000]);
    }
}
