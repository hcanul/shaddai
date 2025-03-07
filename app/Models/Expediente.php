<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = 'expedientes';

    protected $fillable = [ 'name', 'apaterno', 'amaterno', 'edad', 'sexo', 'fnacimiento', 'curp', 'nacionalidad', 'ecivil', 'estudios', 'ocupacion', 'religion', 'street', 'number', 'cp', 'colony', 'town', 'municipio', 'telefono', 'vulnerable', 'vivecasa', 'trabajan', 'estudian', 'trabajaactual', 'depeneconomicos', 'segsoci', 'apoyogob', 'tuberculosis', 'dm', 'hta', 'enfneoplasticas', 'cardiopatia', 'hepatopatias', 'nefropatias', 'enfendocrinas', 'enfmentales', 'asma', 'enfhematologicas', 'enfinfeccinfanc', 'tb', 'enfvenereas', 'fiebre', 'tifoidea', 'salmonelosis', 'neumonias', 'paludismo', 'parasitosis', 'enfalergicas', 'intervenciones', 'qx', 'hospitalizacion', 'traumatismos', 'perdiconocimiento', 'transfusiones', 'intolmedicamentos', 'tiposangre', 'alergias', 'banio', 'lavdientes', 'tabaquismos', 'alcoholismo', 'toxicomanias', 'deportes', 'peso', 'talla', 'fc', 'fr', 'temp', 'ca', 'so2', 'ta', 'imc', 'observaciones', 'tx', 'dx', 'permitiooracion', 'interesoracion', 'espcialidadintesada', 'observaciones2' ];

    protected function name(): Attribute
    {
        return Attribute::make(
            set: function($value)
            {
                return strtoupper($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

    protected function apaterno(): Attribute
    {
        return Attribute::make(
            set: function($value)
            {
                return strtoupper($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

    protected function amaterno(): Attribute
    {
        return Attribute::make(
            set: function($value)
            {
                return strtoupper($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }

    protected function curp(): Attribute
    {
        return Attribute::make(
            set: function($value)
            {
                return strtoupper($value);
            },
            get: function($value)
            {
                return ucfirst($value);
            }
        );
    }
}
