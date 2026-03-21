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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->integer('expediente_id');
//notas evolucion
            $table->float('peso')->nullable();
            $table->float('talla')->nullable();
            $table->integer('fc')->nullable();
            $table->integer('fr')->nullable();
            $table->float('temp')->nullable();
            $table->integer('ca')->nullable();
            $table->integer('so2')->nullable();
            $table->string('ta', 100)->nullable();
            $table->float('imc')->nullable();
            $table->text('observaciones')->nullable();
// Nutricion
            $table->text('observacionesn')->nullable();
            $table->text('txn')->nullable();
            $table->text('dxn')->nullable();
// MedicinaGeneral
            $table->text('observacionesmg')->nullable();
            $table->text('txmg')->nullable();
            $table->text('dxmg')->nullable();
// Fisioterapia
            $table->text('observacionesft')->nullable();
            $table->text('txft')->nullable();
            $table->text('dxft')->nullable();
// Odontologia
            $table->text('observacionesod')->nullable();
            $table->text('txod')->nullable();
            $table->text('dxod')->nullable();
// Situacion espiritua
            $table->enum('permitiooracion', ['SI', 'NO'])->nullable();
            $table->enum('interesoracion', ['SI', 'NO'])->nullable();
            $table->string('espcialidadintesada', 100)->nullable();
            $table->text('observaciones2')->nullable();
            $table->text('dxtx')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
