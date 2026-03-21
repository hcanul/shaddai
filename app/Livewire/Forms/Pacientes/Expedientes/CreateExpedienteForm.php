<?php

namespace App\Livewire\Forms\Pacientes\Expedientes;

use App\Models\Expediente;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateExpedienteForm extends Form
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
    #[Validate('size:18', as:'C. U. R. P.')]
    #[Validate('regex:/^([A-Z][AEIOUX][A-Z]{2}\\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\\d])(\\d)$/', as:'C. U. R. P.')]
    #[Validate('unique:expedientes,curp', as:'C. U. R. P.')]
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

    public $observaciones;


    public function resetUI()
    {
        $this->resetValidation();
        $this->reset(['name', 'apaterno', 'amaterno', 'edad', 'sexo', 'fnacimiento', 'curp', 'nacionalidad', 'ecivil', 'estudios', 'ocupacion', 'religion', 'street', 'number', 'cp', 'colony', 'town', 'municipio', 'telefono', 'vulnerable', 'vivecasa', 'trabajan', 'estudian', 'trabajaactual', 'depeneconomicos', 'segsoci', 'apoyogob', 'tuberculosis', 'dm', 'hta', 'enfneoplasticas', 'cardiopatia', 'hepatopatias', 'nefropatias', 'enfendocrinas', 'enfmentales', 'asma', 'enfhematologicas', 'enfinfeccinfanc', 'tb', 'enfvenereas', 'fiebre', 'tifoidea', 'salmonelosis', 'neumonias', 'paludismo', 'parasitosis', 'enfalergicas', 'intervenciones', 'qx', 'hospitalizacion', 'traumatismos', 'perdiconocimiento', 'transfusiones', 'intolmedicamentos', 'tiposangre', 'alergias', 'banio', 'lavdientes', 'tabaquismos', 'alcoholismo', 'toxicomanias', 'deportes', 'observaciones']);
    }

    public function Save()
    {
        $this->validate();
        Expediente::create($this->only(['name', 'apaterno', 'amaterno', 'edad', 'sexo', 'fnacimiento', 'curp', 'nacionalidad', 'ecivil', 'estudios', 'ocupacion', 'religion', 'street', 'number', 'cp', 'colony', 'town', 'municipio', 'telefono', 'vulnerable', 'vivecasa', 'trabajan', 'estudian', 'trabajaactual', 'depeneconomicos', 'segsoci', 'apoyogob', 'tuberculosis', 'dm', 'hta', 'enfneoplasticas', 'cardiopatia', 'hepatopatias', 'nefropatias', 'enfendocrinas', 'enfmentales', 'asma', 'enfhematologicas', 'enfinfeccinfanc', 'tb', 'enfvenereas', 'fiebre', 'tifoidea', 'salmonelosis', 'neumonias', 'paludismo', 'parasitosis', 'enfalergicas', 'intervenciones', 'qx', 'hospitalizacion', 'traumatismos', 'perdiconocimiento', 'transfusiones', 'intolmedicamentos', 'tiposangre', 'alergias', 'banio', 'lavdientes', 'tabaquismos', 'alcoholismo', 'toxicomanias', 'deportes', 'observaciones']));
    }
}
