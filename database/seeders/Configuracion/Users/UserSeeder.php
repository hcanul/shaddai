<?php

namespace Database\Seeders\Configuracion\Users;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'hugo paulino',
            'apaterno' => 'canul',
            'amaterno' => 'echazarreta',
            'email' => 'superadmin@localhost.com',
            'password' => Hash::make('ha260182ha'),
            'profile' => 'SuperAdmin',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'sol',
            'apaterno' => 'bautista',
            'amaterno' => 'arana',
            'email' => 'superuser@localhost.com',
            'password' => Hash::make('ha260182ha'),
            'profile' => 'SuperUser',
            'status' => 'activo'
        ]);
    }
}
