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
        $medicoRole = Role::firstOrCreate(['name' => 'Medico']);
        $enfermeraRole = Role::firstOrCreate(['name' => 'Enfermera']);

        //Asigno todos los permisos al Rol
        $superAdmin->givePermissionTo(Permission::all());
        $superUser->givePermissionTo(Permission::all());
        $user->givePermissionTo(['Ver CreateNewExpediente', 'Ver EditExpediente', 'Ver DeleteExpediente', 'Ver ViewExpediente']);

        // Asignar permisos de medicamentos
        $medicationPermissions = ['view medications', 'create medications', 'edit medications', 'delete medications'];
        $superAdmin->givePermissionTo($medicationPermissions);
        $medicoRole->givePermissionTo($medicationPermissions);
        $enfermeraRole->givePermissionTo(['view medications', 'create medications', 'edit medications']);

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
