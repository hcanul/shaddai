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
        $superAdmin = Role::create(['name' => 'SuperAdmin']);
        $superUser = Role::create(['name' => 'SuperUser']);
        $user = Role::create(['name'=>'Registro']);

        //Asigno todos los permisos al Rol
        $superAdmin->givePermissionTo(Permission::all());
        $superUser->givePermissionTo(Permission::all());
        $user->givePermissionTo(['Ver CreateNewExpediente', 'Ver EditExpediente', 'Ver DeleteExpediente', 'Ver ViewExpediente']);

        // Obtener el usuario
        $user = User::whereProfile('SuperAdmin')->get()[0];
        $user2 = User::whereProfile('SuperUser')->get()[0];
        $user3 = User::whereProfile('Registro')->get();

        // Asignarle un rol
        $user->assignRole('SuperAdmin');
        $user2->assignRole('SuperUser');

        foreach ($user3 as $usuario) {
            $usuario->assignRole('Registro');
        }
    }
}
