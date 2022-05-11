<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

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
    }
}
