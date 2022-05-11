<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Kamar;
use App\Models\FasilitasKamar;
use App\Models\FasilitasHotel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Seeder User
        User::create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Resepsionis',
            'email' => 'resepsionis@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Tamu',
            'email' => 'tamu@gmail.com',
            'password' => bcrypt('12345678')
        ]);


        // Seeder Role
        Role::create([
            'role' => 'Admin'
        ]);

        Role::create([
            'role' => 'Resepsionis'
        ]);

        Role::create([
            'role' => 'Tamu'
        ]);


        // Seeder Kamar
        Kamar::create([
            'tipe_kamar' => 'Superior',
            'jumlah_kamar' => 32,
            'image' => 'kamar-superior.jpg'
        ]);

        Kamar::create([
            'tipe_kamar' => 'Deluxe',
            'jumlah_kamar' => 40,
            'image' => 'kamar-deluxe.jpg'
        ]);


        // Seeder Fasilitas Kamar
        FasilitasKamar::create([
            'kamar_id' => 1,
            'tipe_kamar' => 'Superior',
            'nama_fasilitas' => 'TV 32 Inch'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'Bath Tub'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'TV 40 Inch'
        ]);

        FasilitasKamar::create([
            'kamar_id' => 2,
            'tipe_kamar' => 'Deluxe',
            'nama_fasilitas' => 'Coffee Maker'
        ]);
        

        // Seeder Fasilitas Hotel
        FasilitasHotel::create([
            'nama_fasilitas' => 'Kolam Renang',
            'keterangan' => 'Berada di lantai 3 dengan luas 50m persegi',
            'image' => 'kolam-renang.jpg'
        ]);

        FasilitasHotel::create([
            'nama_fasilitas' => 'Restoran',
            'keterangan' => 'Berada di lantai 2 dengan luas 200m persegi',
            'image' => 'restoran.jpg'
        ]);

        FasilitasHotel::create([
            'nama_fasilitas' => 'Bathtub',
            'keterangan' => 'Bathtub terbaik dari Jamaika',
            'image' => 'bathtub.jpg'
        ]);
    }   
}
