<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apaterno', 50)->after('name');
            $table->string('amaterno', 50)->after('apaterno');
            $table->enum('profile', ['SuperAdmin', 'SuperUser', 'Registro', 'Enfermeria', 'Medico', 'Almacen'])->after('profile_photo_path');
            $table->enum('status', ['ACTIVO', 'INACTIVO'])->default('ACTIVO')->after('profile');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apaterno');
            $table->dropColumn('amaterno');
            $table->dropColumn('profile');
            $table->dropColumn('status');
        });
    }
};
