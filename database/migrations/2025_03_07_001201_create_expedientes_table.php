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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
//            generales
            $table->string('name', 100);
            $table->string('apaterno', 100);
            $table->string('amaterno', 100);
            $table->integer('edad');
            $table->enum('sexo', ['MASCULINO', 'FEMENINO', 'OTRO']);
            $table->date('fnacimiento');
            $table->string('curp', 20)->nullable();
            $table->string('nacionalidad', 100)->nullable();
            $table->enum('ecivil', ['CASADO', 'SOLTERO', 'VIUDO', 'DIVORCIADO', 'AMASIATO']);
            $table->enum('estudios', ['PRIMARIA', 'SECUNDARIA', 'BACHILLER', 'LICENCIATURA', 'MAESTRIA', 'POSGRADO', 'OTRO']);
            $table->enum('ocupacion', ['CAMPECINO', 'OBRERO', 'COMERCIANTE', 'AMA DE CASA', 'ESTUDIANTE', 'EMPLEADO', 'OTRO']);
            $table->string('religion', 100);
            $table->string('street', 100)->nullable();
            $table->string('number', 100)->nullable();
            $table->integer('cp')->nullable();
            $table->string('colony', 100)->nullable();
            $table->string('town', 100);
            $table->string('municipio', 100);
            $table->string('telefono', 10);
            $table->enum('vulnerable', ['NINGUNO', 'DISCAPACIDAD', 'INDIGENA', 'ADULTO MAYOR', 'MADRE ASIT. SOCIAL', 'MIGRANTE', ]);
//            estructura familiar
            $table->integer('vivecasa')->nullable();
            $table->integer('trabajan')->nullable();
            $table->integer('estudian')->nullable();
//            situacion economica
            $table->enum('trabajaactual',['SI', 'NO'])->nullable();
            $table->integer('depeneconomicos')->nullable();
            $table->enum('segsoci', ['NINGUNO', 'ISSTE', 'IMSS', 'INSABI'])->nullable();
            $table->enum('apoyogob', [
                'Programas de bienestar',
                'Programa para el Bienestar de las Personas Adultas Mayores',
                'Programa Pensión para el Bienestar de las Personas con Discapacidad',
                'Programa Sembrando Vida',
                'Programa para el Bienestar de Niños y Niñas, Hijos de Madres Trabajadoras',
                'Programa 3x1 para Migrantes',
                'Programa para el Bienestar de las Personas en Emergencia Social o Natural',
                'Programas de educación',
                'Becas para el Bienestar Benito Juárez Educación Básica',
                'Programa Becas de apoyo a la Educación Básica de Madres Jóvenes y Jóvenes Embarazadas (PROMAJOVEN)',
                'Programa Educativo Rural',
                ])->nullable();
//            antecedentes medicos
            $table->enum('tuberculosis', ['SI', 'NO'])->nullable();
            $table->enum('dm', ['SI', 'NO'])->nullable();
            $table->enum('hta', ['SI', 'NO'])->nullable();
            $table->enum('enfneoplasticas', ['SI', 'NO'])->nullable();
            $table->enum('cardiopatia', ['SI', 'NO'])->nullable();
            $table->enum('hepatopatias', ['SI', 'NO'])->nullable();
            $table->enum('nefropatias', ['SI', 'NO'])->nullable();
            $table->enum('enfendocrinas', ['SI', 'NO'])->nullable();
            $table->enum('enfmentales', ['SI', 'NO'])->nullable();
            $table->enum('asma', ['SI', 'NO'])->nullable();
            $table->enum('enfhematologicas', ['SI', 'NO'])->nullable();
            $table->enum('enfinfeccinfanc', ['SI', 'NO'])->nullable();
            $table->enum('tb', ['SI', 'NO'])->nullable();
            $table->enum('enfvenereas', ['SI', 'NO'])->nullable();
            $table->enum('fiebre', ['SI', 'NO'])->nullable();
            $table->enum('tifoidea', ['SI', 'NO'])->nullable();
            $table->enum('salmonelosis', ['SI', 'NO'])->nullable();
            $table->enum('neumonias', ['SI', 'NO'])->nullable();
            $table->enum('paludismo', ['SI', 'NO'])->nullable();
            $table->enum('parasitosis', ['SI', 'NO'])->nullable();
            $table->enum('enfalergicas', ['SI', 'NO'])->nullable();
            $table->enum('intervenciones', ['SI', 'NO'])->nullable();
            $table->enum('qx', ['SI', 'NO'])->nullable();
            $table->enum('hospitalizacion', ['SI', 'NO'])->nullable();
            $table->enum('traumatismos', ['SI', 'NO'])->nullable();
            $table->enum('perdiconocimiento', ['SI', 'NO'])->nullable();
            $table->enum('transfusiones', ['SI', 'NO'])->nullable();
            $table->enum('intolmedicamentos', ['SI', 'NO'])->nullable();
//            Personales no patologicas

            $table->enum('tiposangre', ['A Rh+', 'A Rh-', 'B Rh+', 'B Rh-', 'AB Rh+', 'AB Rh-', 'O Rh+', 'O Rh-'])->nullable();
            $table->string('alergias', 100)->nullable();
            $table->integer('banio')->nullable();
            $table->integer('lavdientes')->nullable();
            $table->enum('tabaquismos', ['SI', 'NO'])->nullable();
            $table->enum('alcoholismo', ['SI', 'NO'])->nullable();
            $table->enum('toxicomanias', ['SI', 'NO'])->nullable();
            $table->string('deportes', 100)->nullable();
//            notas evolucion
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
            $table->text('tx')->nullable();
            $table->text('dx')->nullable();
//            Situacion espiritua
            $table->enum('permitiooracion', ['SI', 'NO'])->nullable();
            $table->enum('interesoracion', ['SI', 'NO'])->nullable();
            $table->string('espcialidadintesada', 100)->nullable();
            $table->text('observaciones2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
