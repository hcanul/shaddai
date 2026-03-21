<?php

namespace App\Livewire\Forms\Pacientes\Consultas;

use App\Models\Consultation;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CreateConsultaForm extends Form
{
    public $expediente_id;

    // --- Signos Vitales ---
    #[Validate('nullable|numeric|between:0,500')]
    public $peso;

    #[Validate('nullable|numeric|between:0,300')]
    public $talla;

    #[Validate('nullable|numeric')]
    public $fc;

    #[Validate('nullable|numeric')]
    public $fr;

    #[Validate('nullable|numeric')]
    public $temp;

    #[Validate('nullable|numeric')]
    public $ca;

    #[Validate('nullable|numeric')]
    public $so2;

    #[Validate('nullable|string|max:20')] // Usualmente es 120/80, por lo que string es mejor
    public $ta;

    #[Validate('nullable|numeric')]
    public $imc;

    // --- Medicina General ---
    #[Validate('nullable|string')]
    public $observaciones;

    #[Validate('nullable|string')]
    public $observacionesmg;

    #[Validate('nullable|string')]
    public $txmg;

    #[Validate('nullable|string')]
    public $dxmg;

    #[Validate('nullable|string')]
    public $dxtx;

    // --- Nutrición ---
    #[Validate('nullable|string')]
    public $txn;

    #[Validate('nullable|string')]
    public $dxn;

    // --- Fisioterapia ---
    #[Validate('nullable|string')]
    public $observacionesft;

    #[Validate('nullable|string')]
    public $txft;

    #[Validate('nullable|string')]
    public $dxft;

    // --- Odontología ---
    #[Validate('nullable|string')]
    public $observacionesod;

    #[Validate('nullable|string')]
    public $txod;

    #[Validate('nullable|string')]
    public $dxod;

    // --- Espiritual / Trabajo Social ---
    #[Validate('nullable|string')]
    public $permitiooracion;

    #[Validate('nullable|string')]
    public $interesoracion;

    #[Validate('nullable|string')]
    public $espcialidadintesada;

    #[Validate('nullable|string')]
    public $observaciones2;


    public function resetUI()
    {
        $this->reset();
        $this->resetValidation();
    }

    public function Save()
    {
        $this->validate();
        Consultation::create($this->all());
    }
}
