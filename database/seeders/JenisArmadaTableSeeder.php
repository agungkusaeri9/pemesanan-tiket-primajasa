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


    }
}
