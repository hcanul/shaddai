<?php

namespace Database\Seeders\Configuracion\Users\Data;

use App\Models\Consultation;
use App\Models\Expediente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ExpedienteSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {

            $json = File::get(database_path('seeders/Configuracion/Users/Data/expedientes.json'));
            $data = json_decode($json, true);

            foreach ($data['expedientes'] as $item) {

                /* =========================
                   CREAR EXPEDIENTE
                ==========================*/
                $expediente = Expediente::create([
                    'name' => trim($item['name'] ?? null),
                    'apaterno' => trim($item['apaterno'] ?? null),
                    'amaterno' => trim($item['amaterno'] ?? null),
                    'edad' => $item['edad'] ?? null,
                    'sexo' => $item['sexo'] ?? null,
                    'fnacimiento' => $item['fnacimiento'] ?? null,
                    'curp' => trim($item['curp'] ?? null),
                    'nacionalidad' => trim($item['nacionalidad'] ?? null),
                    'ecivil' => $item['ecivil'] ?? null,
                    'estudios' => $item['estudios'] ?? null,
                    'ocupacion' => $item['ocupacion'] ?? null,
                    'religion' => $item['religion'] ?? null,
                    'street' => $item['street'] ?? null,
                    'number' => $item['number'] ?? null,
                    'cp' => $item['cp'] ?? null,
                    'colony' => $item['colony'] ?? null,
                    'town' => $item['town'] ?? null,
                    'municipio' => $item['municipio'] ?? null,
                    'telefono' => $item['telefono'] ?? null,
                    'vulnerable' => $item['vulnerable'] ?? null,
                    'vivecasa' => $item['vivecasa'] ?? null,
                    'trabajan' => $item['trabajan'] ?? null,
                    'estudian' => $item['estudian'] ?? null,
                    'trabajaactual' => $item['trabajaactual'] ?? null,
                    'depeneconomicos' => $item['depeneconomicos'] ?? null,
                    'segsoci' => $item['segsoci'] ?? null,
                    'apoyogob' => $item['apoyogob'] ?? null,
                    'tuberculosis' => $item['tuberculosis'] ?? null,
                    'dm' => $item['dm'] ?? null,
                    'hta' => $item['hta'] ?? null,
                    'enfneoplasticas' => $item['enfneoplasticas'] ?? null,
                    'cardiopatia' => $item['cardiopatia'] ?? null,
                    'hepatopatias' => $item['hepatopatias'] ?? null,
                    'nefropatias' => $item['nefropatias'] ?? null,
                    'enfendocrinas' => $item['enfendocrinas'] ?? null,
                    'enfmentales' => $item['enfmentales'] ?? null,
                    'asma' => $item['asma'] ?? null,
                    'enfhematologicas' => $item['enfhematologicas'] ?? null,
                    'enfinfeccinfanc' => $item['enfinfeccinfanc'] ?? null,
                    'tb' => $item['tb'] ?? null,
                    'enfvenereas' => $item['enfvenereas'] ?? null,
                    'fiebre' => $item['fiebre'] ?? null,
                    'tifoidea' => $item['tifoidea'] ?? null,
                    'salmonelosis' => $item['salmonelosis'] ?? null,
                    'neumonias' => $item['neumonias'] ?? null,
                    'paludismo' => $item['paludismo'] ?? null,
                    'parasitosis' => $item['parasitosis'] ?? null,
                    'enfalergicas' => $item['enfalergicas'] ?? null,
                    'intervenciones' => $item['intervenciones'] ?? null,
                    'qx' => $item['qx'] ?? null,
                    'hospitalizacion' => $item['hospitalizacion'] ?? null,
                    'traumatismos' => $item['traumatismos'] ?? null,
                    'perdiconocimiento' => $item['perdiconocimiento'] ?? null,
                    'transfusiones' => $item['transfusiones'] ?? null,
                    'intolmedicamentos' => $item['intolmedicamentos'] ?? null,
                    'tiposangre' => $item['tiposangre'] ?? null,
                    'alergias' => $item['alergias'] ?? null,
                    'banio' => $item['banio'] ?? null,
                    'lavdientes' => $item['lavdientes'] ?? null,
                    'tabaquismos' => $item['tabaquismos'] ?? null,
                    'alcoholismo' => $item['alcoholismo'] ?? null,
                    'toxicomanias' => $item['toxicomanias'] ?? null,
                    'deportes' => $item['deportes'] ?? null,
                    'created_at' => $item['created_at'] ?? now(),
                    'updated_at' => $item['updated_at'] ?? now(),
                ]);

                /* =========================
                   CREAR CONSULTATION
                ==========================*/
                Consultation::create([
                    'expediente_id' => $expediente->id,
                    'peso' => $item['peso'] ?? null,
                    'talla' => $item['talla'] ?? null,
                    'fc' => $item['fc'] ?? null,
                    'fr' => $item['fr'] ?? null,
                    'temp' => $item['temp'] ?? null,
                    'ca' => $item['ca'] ?? null,
                    'so2' => $item['so2'] ?? null,
                    'ta' => $item['ta'] ?? null,
                    'imc' => $item['imc'] ?? null,
                    'observaciones' => $item['observaciones'] ?? null,
                    'permitiooracion' => $item['permitiooracion'] ?? null,
                    'interesoracion' => $item['interesoracion'] ?? null,
                    'espcialidadintesada' => $item['espcialidadintesada'] ?? null,
                    'observaciones2' => $item['observaciones2'] ?? null,
                    'dxtx' => $item['dxtx'] ?? null,
                    'created_at' => $item['created_at'] ?? now(),
                    'updated_at' => $item['updated_at'] ?? now(),
                ]);
            }
        });
    }
}
