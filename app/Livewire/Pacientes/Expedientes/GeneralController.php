<?php

namespace App\Livewire\Pacientes\Expedientes;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class GeneralController extends Component
{
    use WithPagination;

    #[Url()]
    public $search;

    public $selected_id, $pageTitle, $componentName,  $open;

    public $pagination = 10;

    public $columns = [ 'name' => 'NOMBRE', 'guard_name' => 'NOMBRE DE GUARDIA'];

    public $displayColumns = [ 'name', 'guard_name' ];

    public $headers = [ 'NOMBRE', 'NOMBRE DE GUARDIA' ];

    public function render()
    {
        return view('livewire.pacientes.expedientes.general-controller');
    }
}
