<?php

namespace App\Livewire\Forms\Pacientes\Expedientes;

use App\Models\Expediente;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EditExpedienteForm extends Form
{
    #[Validate('required', as:'NOMBRES')]
    public $name;

    #[Validate('required', as: 'APELLIDO PARTENO')]
    public $apaterno;

    #[Validate('required', as:'APELLIDO MATERNO')]
    public $amaterno;

    #[Validate('required', as: 'EDAD')]
    public $edad;

    #[Validate('required', as:'SEXO')]
    public $sexo;

    #[Validate('required', as:'FECHA DE NACIEMIENTO')]
    public $fnacimiento;

    #[Validate('required', as:'C. U. R. P.')]
    public $curp;

    public $nacionalidad;

    #[Validate('required', as: 'ESTADO CIVIL')]
    public $ecivil;

    #[Validate('required', as:'ULTIMO GRADO ESTUDIOS')]
    public $estudios;

    #[Validate('required', as:'OCUPACION')]
    public $ocupacion;

    #[Validate('required', as:'RELIGION')]
    public $religion;

    public $street;

    public $number;

    public $cp;

    public $colony;

    #[Validate('required', as:'COMUNIDAD')]
    public $town;

    #[Validate('required', as:'MUNICIPIO O CIUDAD')]
    public $municipio;

    #[Validate('required', as:'TELEFONO')]
    public $telefono;

    #[Validate('required', as: 'SITUACION DE VULNERABILIDAD')]
    public $vulnerable;

    public $vivecasa;

    public $trabajan;

    public $estudian;

    public $trabajaactual;

    public $depeneconomicos;

    public $segsoci;

    public $apoyogob;

    public $tuberculosis;

    public $dm;

    public $hta;

    public $enfneoplasticas;

    public $cardiopatia;

    public $hepatopatias;

    public $nefropatias;

    public $enfendocrinas;

    public $enfmentales;

    public $asma;

    public $enfhematologicas;

    public $enfinfeccinfanc;

    public $tb;

    public $enfvenereas;

    public $fiebre;

    public $tifoidea;

    public $salmonelosis;

    public $neumonias;

    public $paludismo;

    public $parasitosis;

    public $enfalergicas;

    public $intervenciones;

    public $qx;

    public $hospitalizacion;

    public $traumatismos;

    public $perdiconocimiento;

    public $transfusiones;

    public $intolmedicamentos;

    public $tiposangre;

    public $alergias;

    public $banio;

    public $lavdientes;

    public $tabaquismos;

    public $alcoholismo;

    public $toxicomanias;

    public $deportes;

    public $peso;

    public $talla;

    public $fc;

    public $fr;

    public $temp;

    public $ca;

    public $so2;

    public $ta;

    public $imc;

    public $observaciones;

    public $tx;

    public $dx;

    public $permitiooracion;

    public $interesoracion;

    public $espcialidadintesada;

    public $observaciones2;

    public function loadData($id)
    {
        $expediente = Expediente::findOrFail($id);

        $this->name = $expediente->name;
        $this->apaterno = $expediente->apaterno;
        $this->amaterno = $expediente->amaterno;
        $this->edad = $expediente->edad;
        $this->sexo = $expediente->sexo;
        $this->fnacimiento = $expediente->fnacimiento;
        $this->curp = $expediente->curp;
        $this->nacionalidad = $expediente->nacionalidad;
        $this->ecivil = $expediente->ecivil;
        $this->estudios = $expediente->estudios;
        $this->ocupacion = $expediente->ocupacion;
        $this->religion = $expediente->religion;
        $this->street = $expediente->street;
        $this->number = $expediente->number;
        $this->cp = $expediente->cp;
        $this->colony = $expediente->colony;
        $this->town = $expediente->town;
        $this->municipio = $expediente->municipio;
        $this->telefono = $expediente->telefono;
        $this->vulnerable = $expediente->vulnerable;
        $this->vivecasa = $expediente->vivecasa;
        $this->trabajan = $expediente->trabajan;
        $this->estudian = $expediente->estudian;
        $this->trabajaactual = $expediente->trabajaactual;
        $this->depeneconomicos = $expediente->depeneconomicos;
        $this->segsoci = $expediente->segsoci;
        $this->apoyogob = $expediente->apoyogob;
        $this->tuberculosis = $expediente->tuberculosis;
        $this->dm = $expediente->dm;
        $this->hta = $expediente->hta;
        $this->enfneoplasticas = $expediente->enfneoplasticas;
        $this->cardiopatia = $expediente->cardiopatia;
        $this->hepatopatias = $expediente->hepatopatias;
        $this->nefropatias = $expediente->nefropatias;
        $this->enfendocrinas = $expediente->enfendocrinas;
        $this->enfmentales = $expediente->enfmentales;
        $this->asma = $expediente->asma;
        $this->enfhematologicas = $expediente->enfhematologicas;
        $this->enfinfeccinfanc = $expediente->enfinfeccinfanc;
        $this->tb = $expediente->tb;
        $this->enfvenereas = $expediente->enfvenereas;
        $this->fiebre = $expediente->fiebre;
        $this->tifoidea = $expediente->tifoidea;
        $this->salmonelosis = $expediente->salmonelosis;
        $this->neumonias = $expediente->neumonias;
        $this->paludismo = $expediente->paludismo;
        $this->parasitosis = $expediente->parasitosis;
        $this->enfalergicas = $expediente->enfalergicas;
        $this->intervenciones = $expediente->intervenciones;
        $this->qx = $expediente->qx;
        $this->hospitalizacion = $expediente->hospitalizacion;
        $this->traumatismos = $expediente->traumatismos;
        $this->perdiconocimiento = $expediente->perdiconocimiento;
        $this->transfusiones = $expediente->transfusiones;
        $this->intolmedicamentos = $expediente->intolmedicamentos;
        $this->tiposangre = $expediente->tiposangre;
        $this->alergias = $expediente->alergias;
        $this->banio = $expediente->banio;
        $this->lavdientes = $expediente->lavdientes;
        $this->tabaquismos = $expediente->tabaquismos;
        $this->alcoholismo = $expediente->alcoholismo;
        $this->toxicomanias = $expediente->toxicomanias;
        $this->deportes = $expediente->deportes;
        $this->peso = $expediente->peso;
        $this->talla = $expediente->talla;
        $this->fc = $expediente->fc;
        $this->fr = $expediente->fr;
        $this->temp = $expediente->temp;
        $this->ca = $expediente->ca;
        $this->so2 = $expediente->so2;
        $this->ta = $expediente->ta;
        $this->imc = $expediente->imc;
        $this->observaciones = $expediente->observaciones;
        $this->tx = $expediente->tx;
        $this->dx = $expediente->dx;
        $this->permitiooracion = $expediente->permitiooracion;
        $this->interesoracion = $expediente->interesoracion;
        $this->espcialidadintesada = $expediente->espcialidadintesada;
        $this->observaciones2 = $expediente->observaciones2;
    }

    public function setData($id)
    {
        $this->validate();

        $expediente = Expediente::findOrFail($id);

        $expediente->update($this->only([
            'name',
            'apaterno',
            'amaterno',
            'edad',
            'sexo',
            'fnacimiento',
            'curp',
            'nacionalidad',
            'ecivil',
            'estudios',
            'ocupacion',
            'religion',
            'street',
            'number',
            'cp',
            'colony',
            'town',
            'municipio',
            'telefono',
            'vulnerable',
            'vivecasa',
            'trabajan',
            'estudian',
            'trabajaactual',
            'depeneconomicos',
            'segsoci',
            'apoyogob',
            'tuberculosis',
            'dm',
            'hta',
            'enfneoplasticas',
            'cardiopatia',
            'hepatopatias',
            'nefropatias',
            'enfendocrinas',
            'enfmentales',
            'asma',
            'enfhematologicas',
            'enfinfeccinfanc',
            'tb',
            'enfvenereas',
            'fiebre',
            'tifoidea',
            'salmonelosis',
            'neumonias',
            'paludismo',
            'parasitosis',
            'enfalergicas',
            'intervenciones',
            'qx',
            'hospitalizacion',
            'traumatismos',
            'perdiconocimiento',
            'transfusiones',
            'intolmedicamentos',
            'tiposangre',
            'alergias',
            'banio',
            'lavdientes',
            'tabaquismos',
            'alcoholismo',
            'toxicomanias',
            'deportes',
            'peso',
            'talla',
            'fc',
            'fr',
            'temp',
            'ca',
            'so2',
            'ta',
            'imc',
            'observaciones',
            'tx',
            'dx',
            'permitiooracion',
            'interesoracion',
            'espcialidadintesada',
            'observaciones2',
                ]));
    }

    public function resetUI()
    {
        $this->resetValidation();

        $this->reset(['name',
            'apaterno',
            'amaterno',
            'edad',
            'sexo',
            'fnacimiento',
            'curp',
            'nacionalidad',
            'ecivil',
            'estudios',
            'ocupacion',
            'religion',
            'street',
            'number',
            'cp',
            'colony',
            'town',
            'municipio',
            'telefono',
            'vulnerable',
            'vivecasa',
            'trabajan',
            'estudian',
            'trabajaactual',
            'depeneconomicos',
            'segsoci',
            'apoyogob',
            'tuberculosis',
            'dm',
            'hta',
            'enfneoplasticas',
            'cardiopatia',
            'hepatopatias',
            'nefropatias',
            'enfendocrinas',
            'enfmentales',
            'asma',
            'enfhematologicas',
            'enfinfeccinfanc',
            'tb',
            'enfvenereas',
            'fiebre',
            'tifoidea',
            'salmonelosis',
            'neumonias',
            'paludismo',
            'parasitosis',
            'enfalergicas',
            'intervenciones',
            'qx',
            'hospitalizacion',
            'traumatismos',
            'perdiconocimiento',
            'transfusiones',
            'intolmedicamentos',
            'tiposangre',
            'alergias',
            'banio',
            'lavdientes',
            'tabaquismos',
            'alcoholismo',
            'toxicomanias',
            'deportes',
            'peso',
            'talla',
            'fc',
            'fr',
            'temp',
            'ca',
            'so2',
            'ta',
            'imc',
            'observaciones',
            'tx',
            'dx',
            'permitiooracion',
            'interesoracion',
            'espcialidadintesada',
            'observaciones2']);
    }
}
