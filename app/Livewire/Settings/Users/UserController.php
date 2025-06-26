<?php

namespace App\Livewire\Settings\Users;

use App\Livewire\Forms\Settings\Users\CreateFormUser;
use App\Livewire\Forms\Settings\Users\EditFormUser;
use App\Models\User;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserController extends Component
{
    use WithPagination;

    public CreateFormUser $createForm;

    public EditFormUser $editForm;

    #[Url()]
    public $search;

    public $selected_id, $pageTitle, $componentName,  $open;

    public $pagination = 10;

    public $columns = [ 'name' => 'NOMBRE', 'email' => 'CORREO', 'profile' => 'PERFIL', 'city.name'=>'OFICINA', 'status' => 'ESTADO' ];

    public $displayColumns = [ 'name', 'email', 'profile', 'city.name', 'status' ];

    public $headers = [ 'NOMBRE', 'CORREO', 'PERFIL', 'OFICINA', 'ESTADO'];

    public function mount()
    {
        $this->search = null;
        $this->selected_id = null;
        $this->pageTitle = null;
        $this->componentName = null;
        $this->open = false;
        $this->pageTitle = 'LISTADO';
        $this->componentName = 'SECCIÓN DE USUARIOS';
    }

    public function render()
    {
        if ($this->search)
        {
            $rows = User::whereLike('name', '%' . $this->search . '%')->paginate($this->pagination);
        }else{
            $rows = User::orderBy('name', 'asc')->paginate($this->pagination);
        }

        return view('livewire.settings.users.component',[
            'rows' => $rows,
            'roles' => Role::all(),
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

    public function confirmDelete(User $user)
    {
        $user->update(['status' => 'INACTIVO']);
        $this->dispatch('sweet-toast', icon:'success', title:'Registro eliminado con exito!!');
    }
}
