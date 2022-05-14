<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FasilitasHotel;

class FasilitasHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasHotel::create([
            'nama_fasilitas' => 'Kolam Renang',
            'keterangan' => 'Berada di lantai 3 dengan luas 50m persegi',
            'image' => 'fasilitas-hotel/foBiWCuO5LAkm7Ii3Z6UKHLwYp3zON6YWUTgCdqx.jpg'
        ]);

        FasilitasHotel::create([
            'nama_fasilitas' => 'Restoran',
            'keterangan' => 'Berada di lantai 2 dengan luas 200m persegi',
            'image' => 'fasilitas-hotel/1VXq3dpD6xP1s6X5u5yI5lO4WZCgukhsE9YzU5aX.jpg'
        ]);

        FasilitasHotel::create([
            'nama_fasilitas' => 'Bathtub',
            'keterangan' => 'Bathtub terbaik dari Jamaika',
            'image' => 'fasilitas-hotel/jQUVkAZy4Nibt5hbqmzHTwQJ0AdhkJ3KBl2Cm077.jpg'
        ]);
    }
}
