<?php

namespace App\Livewire\Pacientes\Consultas;

use App\Livewire\Forms\Pacientes\Consultas\CreateConsultaForm;
use App\Models\Expediente;
use App\Models\Consultation;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ConsultaController extends Component
{
    use WithPagination;

    public CreateConsultaForm $createForm;

    #[Url()]
    public $search;

    public $pageTitle, $componentName, $open, $expediente, $busquedaRealizada, $ultimaConsulta;

    // Colección para cargar el historial dentro del modal
    public $historialConsultas = [];

    public $curp;
    public $pagination = 10;

    public function mount()
    {
        $this->resetUI();
    }

    public function buscar()
    {
        $this->validate(['curp' => 'required|string']);
        $this->curp = strtoupper(trim($this->curp));
        $this->busquedaRealizada = true;

        try {
            $this->expediente = Expediente::where('curp', $this->curp)->first();
            if($this->expediente){
                $this->ultimaConsulta = $this->expediente->consultations()->latest()->first();
                $this->dispatch('sweet-toast', icon:'success', title:'Registro Encontrado');
            }
        } catch (\Throwable $th) {
            $this->dispatch('sweet-toast', icon:'error', title:'Error: ' . $th->getMessage());
            $this->expediente = null;
            $this->ultimaConsulta = null;
        }
    }

    // --- CÁLCULO DE IMC EN TIEMPO REAL ---
    public function updatedCreateFormPeso($value)
    {
        $this->calcularIMC();
    }

    public function updatedCreateFormTalla($value)
    {
        $this->calcularIMC();
    }

    private function calcularIMC()
    {
        $peso = (float) $this->createForm->peso;
        $talla = (float) $this->createForm->talla;

        if ($peso > 0 && $talla > 0) {
            // Si la talla se ingresa en centímetros (ej. 170), la convertimos a metros (1.70)
            $tallaMetros = $talla > 3 ? $talla / 100 : $talla;

            $imc = $peso / ($tallaMetros * $tallaMetros);
            $this->createForm->imc = number_format($imc, 2, '.', '');
        } else {
            $this->createForm->imc = null;
        }
    }

    public function newAdd($idExpediente)
    {
        $this->createForm->resetUI();
        $this->createForm->expediente_id = $idExpediente;

        // Cargamos el historial de consultas previas del paciente para mostrarlas en el modal
        $this->historialConsultas = Consultation::where('expediente_id', $idExpediente)
                                                ->latest()
                                                ->get();

        $this->open = true;
    }

    public function Store()
    {
        $this->createForm->Save();
        $this->open = false;
        $this->dispatch('sweet-toast', icon:'success', title:'Consulta guardada exitosamente');

        // Refrescamos la vista de fondo
        $this->buscar();
    }

    public function resetUI()
    {
        $this->pageTitle = 'BUSCAR';
        $this->componentName = 'SECCIÓN DE CONSULTAS';
        $this->open = false;
        $this->expediente = null;
        $this->busquedaRealizada = false;
        $this->ultimaConsulta = null;
        $this->historialConsultas = [];
    }

    public function render()
    {
        return view('livewire.pacientes.consultas.seekcurp')
            ->extends('layouts.themes.app')
            ->section('content');
    }
}
