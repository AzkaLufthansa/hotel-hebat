<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cahced roles and permission
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'reservasi']);
        Permission::create(['name' => 'cetak-bukti']);
        Permission::create(['name' => 'mengelola-data']);
        Permission::create(['name' => 'pengecekan-data-pesanan']);
        Permission::create(['name' => 'konfirmasi-pesanan']);

         //create roles and assign existing permissions
         $roleTamu = Role::create(['name' => 'tamu']);
         $roleTamu->givePermissionTo('reservasi');
         $roleTamu->givePermissionTo('cetak-bukti');

         $roleAdmin = Role::create(['name' => 'admin']);
         $roleAdmin->givePermissionTo('mengelola-data');

         $roleResepsionis = Role::create(['name' => 'resepsionis']);
         $roleResepsionis->givePermissionTo('pengecekan-data-pesanan');
         $roleResepsionis->givePermissionTo('konfirmasi-pesanan');

         // create demo users
        $user = User::factory()->create([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleAdmin);

        $user = User::factory()->create([
            'role_id' => 3,
            'name' => 'Tamu',
            'email' => 'tamu@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleTamu);

        $user = User::factory()->create([
            'role_id' => 2,
            'name' => 'Resepsionis',
            'email' => 'resepsionis@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($roleResepsionis);
    }
}
