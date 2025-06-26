<?php

namespace App\Livewire\Forms\Storage;

use App\Models\Medication;
use Livewire\Form;
use Livewire\Attributes\Rule;

class CreateMedicationForm extends Form
{
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

    public function Save()
    {
        $this->validate();

        Medication::create([
            'name' => $this->name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'patient_id' => $this->patient_id,
            'doctor_id' => $this->doctor_id,
        ]);

        $this->reset();
    }

    public function reset(...$properties)
    {
        parent::reset(...$properties);
        $this->name = '';
        $this->description = '';
        $this->quantity = 0;
        $this->patient_id = '';
        $this->doctor_id = '';
    }
}
