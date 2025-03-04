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

        //Asigno todos los permisos al Rol
        $superAdmin->givePermissionTo(Permission::all());

        // Obtener el usuario
        $user = User::whereProfile('SuperAdmin')->get()[0];

        // Asignarle un rol
        $user->assignRole('SuperAdmin');
    }
}
