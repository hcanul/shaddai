<?php

namespace App\Livewire\Forms\Storage;

use App\Models\Medication;
use Livewire\Form;
use Livewire\Attributes\Rule;

class EditMedicationForm extends Form
{
    public $id;

    #[Rule('required|string')]
    public $name = '';

    #[Rule('nullable|string')]
    public $description = '';

    #[Rule('required|integer')]
    public $quantity = 0;

    #[Rule('required|exists:expedientes,id')]
    public $patient_id = '';

    #[Rule('required|exists:users,id')]
    public $doctor_id = '';

    public function loadData($id)
    {
        $medication = Medication::findOrFail($id);
        $this->id = $medication->id;
        $this->name = $medication->name;
        $this->description = $medication->description;
        $this->quantity = $medication->quantity;
        $this->patient_id = $medication->patient_id;
        $this->doctor_id = $medication->doctor_id;
    }

    public function Update()
    {
        $this->validate();

        if ($this->id) {
            $medication = Medication::findOrFail($this->id);
            $medication->update([
                'name' => $this->name,
                'description' => $this->description,
                'quantity' => $this->quantity,
                'patient_id' => $this->patient_id,
                'doctor_id' => $this->doctor_id,
            ]);
        }

        $this->reset();
    }

    public function reset(...$properties)
    {
        parent::reset(...$properties);
        $this->id = null;
        $this->name = '';
        $this->description = '';
        $this->quantity = 0;
        $this->patient_id = '';
        $this->doctor_id = '';
    }
}
