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

        User::create([
            'name' => 'Haniel Isai',
            'apaterno' => 'Chable',
            'amaterno' => 'May',
            'email' => 'haniel@localhost.com',
            'password' => Hash::make('hichablem'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Angel Antonio',
            'apaterno' => 'Itza',
            'amaterno' => 'CAnche',
            'email' => 'angelantonio@localhost.com',
            'password' => Hash::make('aaitza'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Sol Ezri',
            'apaterno' => 'Bautista',
            'amaterno' => 'Lopez',
            'email' => 'solezri@localhost.com',
            'password' => Hash::make('sbautista'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Akari Lucero',
            'apaterno' => 'Herrera',
            'amaterno' => 'Aguilar',
            'email' => 'akarilucero@localhost.com',
            'password' => Hash::make('akih1505'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Betsabe Ahinoam',
            'apaterno' => 'Bautista',
            'amaterno' => 'Lopez',
            'email' => 'ahinoambautista@localhost.com',
            'password' => Hash::make('AhiEzr'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Ana Patricia',
            'apaterno' => 'Yam',
            'amaterno' => 'Estrada',
            'email' => 'anay86234@gmail.com',
            'password' => Hash::make('anay86234'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Aaron',
            'apaterno' => 'Arana',
            'amaterno' => 'Reyero',
            'email' => 'astasama@gmail.com',
            'password' => Hash::make('OdontoShaddaiMM'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Moises Roberto',
            'apaterno' => 'Uicab',
            'amaterno' => 'Cach',
            'email' => 'moises@gmail.com',
            'password' => Hash::make('moises1399'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Dayany',
            'apaterno' => 'Poot',
            'amaterno' => 'N',
            'email' => 'dayany@gmail.com',
            'password' => Hash::make('dayani678'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Mindy',
            'apaterno' => 'Vancouver',
            'amaterno' => 'N',
            'email' => 'mindy@gmail.com',
            'password' => Hash::make('mindy1234'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Josefina',
            'apaterno' => 'Reyero',
            'amaterno' => 'N',
            'email' => 'josefina@gmail.com',
            'password' => Hash::make('josefina9834'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Belem Asui',
            'apaterno' => 'Cauich',
            'amaterno' => 'Lopez',
            'email' => 'belen@gmail.com',
            'password' => Hash::make('belem1256'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);

        User::create([
            'name' => 'Teresita de Jesus',
            'apaterno' => 'Lopez',
            'amaterno' => 'Alonzo',
            'email' => 'teresita@gmail.com',
            'password' => Hash::make('teresita9567'),
            'profile' => 'Registro',
            'status' => 'activo'
        ]);
    }
}
