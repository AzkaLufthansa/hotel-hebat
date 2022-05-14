<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FasilitasKamar;

class FasilitasKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasKamar::create([
            'kamar_id' => 1,
            // 'tipe_kamar' => 'Superior',
            'nama_fasilitas' => 'TV 32 Inch'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            // 'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'Bath Tub'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            // 'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'TV 40 Inch'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            // 'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'Coffee Maker'
        ]);
    }
}
