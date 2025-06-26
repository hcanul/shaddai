<?php

namespace App\Livewire\Pacientes\Expedientes;

use App\Livewire\Forms\Pacientes\Expedientes\CreateExpedienteForm;
use App\Livewire\Forms\Pacientes\Expedientes\CreateForm;
use App\Livewire\Forms\Pacientes\Expedientes\EditExpedienteForm;
use App\Models\Expediente;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class GeneralController extends Component
{
    use WithPagination;

    public CreateExpedienteForm $createForm;

    public EditExpedienteForm $editForm;

    #[Url()]
    public $search;

    public $selected_id, $pageTitle, $componentName,  $open;

    public $pagination = 10;

    public $columns = [ 'name' => 'NOMBRE', 'apaterno' => 'APELLIDO PATERNO', 'amaterno'=>'APELLIDO MATERNO', 'curp'=>'CURP', 'colony'=>'COMUNIDAD O CIUDAD'];

    public $displayColumns = [ 'name', 'apaterno', 'amaterno', 'curp', 'colony' ];

    public $headers = [ 'NOMBRE', 'APELLIDO PATERNO', 'APELLIDO MATERNO', 'CURP', 'COMUNIDAD O CIUDAD' ];

    public function mount()
    {
        $this->search = null;
        $this->selected_id = null;
        $this->pageTitle = null;
        $this->componentName = null;
        $this->open = false;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE EXPEDIENTES';
    }

    public function render()
    {
        if ($this->search)
        {
            $rows = Expediente::whereLike('curp', '%' . $this->search . '%')->paginate($this->pagination);
        }else{
            $rows = Expediente::orderBy('name', 'asc')->paginate($this->pagination);
        }

        return view('livewire.pacientes.expedientes.component', [
            'rows' => $rows,
        ])
            ->extends('layouts.themes.app')
            ->section('content');
    }

    public function resetUI()
    {
        $this->search = null;
        $this->selected_id = null;
        $this->pageTitle = null;
        $this->componentName = null;
        $this->open = false;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE USUARIOS';
    }

    public function newAdd()
    {
        $this->selected_id = null;
        $this->open = true;
        $this->createForm->resetUI();
    }

    public function Store()
    {
        $data = $this->createForm->Save();
        $this->resetUI();
        $this->dispatch('sweet-toast', icon:'success', title:'Registro Creado exitosamente!!, el password es: '. $data);
    }

    public function Editar($id)
    {
        $this->open = true;
        $this->selected_id = $id;
        $this->editForm->loadData($id);
    }

    public function Update()
    {
        $this->editForm->setData($this->selected_id);
        $this->resetUI();
        $this->dispatch('sweet-toast', icon:'success', title:'Registro editado con exito!!');
    }

    public function confirmDelete(Expediente $expediente)
    {
        $expediente->delete();
        $this->dispatch('sweet-toast', icon:'success', title:'Registro eliminado con exito!!');
    }
}
