<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kamar;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamar::create([
            'tipe_kamar' => 'Superior',
            'jumlah_kamar' => 32,
            'image' => 'kamar-images/NAtOQfDwNslleUG14RxSWBPh0ntSOXoRYcOv5ltv.jpg'
        ]);

        Kamar::create([
            'tipe_kamar' => 'Deluxe',
            'jumlah_kamar' => 40,
            'image' => 'kamar-images/G4p4nJRGGWX0Rb6ZcifIgsWT4M87tFogdUv2V4CL.jpg'
        ]);
    }
}
