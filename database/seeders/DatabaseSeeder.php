<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Configuracion\Permissions\Permission\PermissionSeeder;
use Database\Seeders\Configuracion\Permissions\Roles\RoleSeeder;
use Database\Seeders\Configuracion\Users\UserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
    }
}
