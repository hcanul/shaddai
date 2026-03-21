<?php

namespace Database\Seeders\Configuracion\Permissions\Roles;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $superAdmin = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $superUser = Role::firstOrCreate(['name' => 'SuperUser']);
        $user = Role::firstOrCreate(['name'=>'Registro']);
        $enfermeraRole = Role::firstOrCreate(['name' => 'Enfermeria']);
        $medicoRole = Role::firstOrCreate(['name' => 'Medico General']);
        $nutriRole = Role::firstOrCreate(['name'=> 'Nutrición']);
        $fisioRole = Role::firstOrCreate(['name'=> 'Fisioterapia']);
        $dentiRole = Role::firstOrCreate(['name'=> 'Dentista']);


        //Asigno todos los permisos al Rol
        $superAdmin->givePermissionTo(Permission::all());
        $superUser->givePermissionTo(Permission::all());
        $user->givePermissionTo(['Ver CreateNewExpediente', 'Ver EditExpediente', 'Ver DeleteExpediente', 'Ver ViewExpediente']);

        // Asignar permisos de medicamentos
        $medicationPermissions = ['view medications', 'create medications', 'edit medications', 'delete medications', 'Ver EditExpediente', 'Ver ViewExpediente', 'view medications', 'create medications', 'edit medications'];
        $superAdmin->givePermissionTo($medicationPermissions);
        $medicoRole->givePermissionTo($medicationPermissions);
        $nutriRole->givePermissionTo($medicationPermissions);
        $fisioRole->givePermissionTo($medicationPermissions);
        $dentiRole->givePermissionTo($medicationPermissions);
        $enfermeraRole->givePermissionTo($medicationPermissions);

        // Obtener el usuario
        $user = User::whereProfile('SuperAdmin')->first();
        if ($user) {
            $user->assignRole('SuperAdmin');
        }

        $user2 = User::whereProfile('SuperUser')->first();
        if ($user2) {
            $user2->assignRole('SuperUser');
        }

        $user3 = User::whereProfile('Registro')->get();
        foreach ($user3 as $usuario) {
            $usuario->assignRole('Registro');
        }

        $userEnfer = User::whereProfile('Enfermeria')->get();
        foreach ($userEnfer as $usuario2) {
            $usuario2->assignRole('Enfermeria');
        }

        $userMedico = User::whereProfile('Medico General')->get();
        foreach ($userMedico as $usuario3) {
            $usuario3->assignRole('Medico General');
        }

        $userNutri = User::whereProfile('Nutricion')->get();
        foreach ($userNutri as $usuario4) {
            $usuario4->assignRole('Nutricion');
        }

        $userFisio = User::whereProfile('Fisioterapia')->get();
        foreach ($userFisio as $usuario5) {
            $usuario4->assignRole('Fisioterapia');
        }

        $userDenti = User::whereProfile('Dentista')->get();
        foreach ($userDenti as $usuario6) {
            $usuario4->assignRole('Dentista');
        }

        // Example of assigning Medico and Enfermera roles to existing users if needed
        // $medicoUser = User::whereEmail('medico@example.com')->first();
        // if ($medicoUser) {
        //     $medicoUser->assignRole('Medico');
        // }
        // $enfermeraUser = User::whereEmail('enfermera@example.com')->first();
        // if ($enfermeraUser) {
        //     $enfermeraUser->assignRole('Enfermera');
        // }
    }
}
