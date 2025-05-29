<?php

namespace App\Livewire\Storage;

use App\Models\Medication;
use App\Models\Expediente;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use App\Livewire\Forms\Storage\CreateMedicationForm;
use App\Livewire\Forms\Storage\EditMedicationForm;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MedicationController extends Component
{
    use WithPagination, AuthorizesRequests;

    public $search = '';
    public $selected_id;
    public $pageTitle;
    public $componentName;
    public $open = false;

    public CreateMedicationForm $createForm;
    public EditMedicationForm $editForm;

    public $columns = ['id', 'name', 'patient_id', 'doctor_id', 'quantity'];
    public $displayColumns = ['ID', 'Name', 'Patient', 'Doctor', 'Quantity', 'Actions']; // Columns to display in the table
    public $headers = ['ID', 'Name', 'Patient', 'Doctor', 'Quantity', 'Actions']; // Headers for the table

    public function mount()
    {
        $this->pageTitle = 'Medications';
        $this->componentName = 'Storage';
        $this->selected_id = 0;
        // Instantiate the form objects
        $this->createForm = new CreateMedicationForm();
        $this->editForm = new EditMedicationForm();
    }

    public function render()
    {
        $patients = Expediente::orderBy('name')->get();
        $doctors = User::orderBy('name')->get(); // Consider adding ->role('Doctor') if you have such a role

        $medications = Medication::with(['patient', 'doctor'])
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhereHas('patient', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    })
                    ->orWhereHas('doctor', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    });
            })
            ->paginate(10);

        return view('livewire.storage.component', [
            'medications' => $medications, // Changed 'rows' to 'medications' to match existing code
            'patients' => $patients,
            'doctors' => $doctors,
        ])
            ->extends('layouts.themes.app') // Changed to layouts.themes.app
            ->section('content'); // Added section content
    }

    public function resetUI()
    {
        $this->search = '';
        $this->selected_id = 0;
        $this->open = false;
        $this->createForm->reset();
        $this->editForm->reset();
        $this->resetPage(); // Reset pagination
    }

    public function newAdd()
    {
        $this->authorize('create medications');
        $this->open = true;
        $this->createForm->reset();
    }

    public function Store()
    {
        $this->authorize('create medications');
        $this->createForm->Save();
        $this->resetUI();
        // You might want to add a success message here
        session()->flash('message', 'Medication created successfully.');
    }

    public function Editar($id)
    {
        $this->authorize('edit medications');
        $this->selected_id = $id;
        $this->editForm->loadData($id);
        $this->open = true;
    }

    public function Update()
    {
        $this->authorize('edit medications');
        $this->editForm->Update();
        $this->resetUI();
        // You might want to add a success message here
        session()->flash('message', 'Medication updated successfully.');
    }

    public function confirmDelete($id) // This method is for UI, actual delete is in deleteRecord
    {
        $this->selected_id = $id;
        // This would typically open a confirmation modal or be handled by the Confirm JS function
        // No direct authorization here as it's a UI step. The actual deleteRecord will have it.
        session()->flash('delete_confirmation', 'Are you sure you want to delete this medication?');
    }

    public function deleteRecord()
    {
        $this->authorize('delete medications');
        if ($this->selected_id) {
            Medication::find($this->selected_id)->delete();
            $this->resetUI();
            session()->flash('message', 'Medication deleted successfully.');
        }
    }
}
