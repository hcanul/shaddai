@include('common.modalHead')

<div class="row">
    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Name</label>
            <input type="text" wire:model.lazy="{{ $selected_id == 0 ? 'createForm.name' : 'editForm.name' }}"
                class="form-control" placeholder="Medication Name">
            @if ($selected_id == 0)
                @error('createForm.name') <span class="text-danger er">{{ $message }}</span> @enderror
            @else
                @error('editForm.name') <span class="text-danger er">{{ $message }}</span> @enderror
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" wire:model.lazy="{{ $selected_id == 0 ? 'createForm.quantity' : 'editForm.quantity' }}"
                class="form-control" placeholder="0">
            @if ($selected_id == 0)
                @error('createForm.quantity') <span class="text-danger er">{{ $message }}</span> @enderror
            @else
                @error('editForm.quantity') <span class="text-danger er">{{ $message }}</span> @enderror
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Patient</label>
            <select wire:model.lazy="{{ $selected_id == 0 ? 'createForm.patient_id' : 'editForm.patient_id' }}"
                class="form-control">
                <option value="">Seleccione un paciente</option>
                @foreach ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }} {{ $patient->apaterno }}</option>
                @endforeach
            </select>
            @if ($selected_id == 0)
                @error('createForm.patient_id') <span class="text-danger er">{{ $message }}</span> @enderror
            @else
                @error('editForm.patient_id') <span class="text-danger er">{{ $message }}</span> @enderror
            @endif
        </div>
    </div>

    <div class="col-sm-12 col-md-6">
        <div class="form-group">
            <label>Doctor</label>
            <select wire:model.lazy="{{ $selected_id == 0 ? 'createForm.doctor_id' : 'editForm.doctor_id' }}"
                class="form-control">
                <option value="">Seleccione un doctor</option>
                @foreach ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
            @if ($selected_id == 0)
                @error('createForm.doctor_id') <span class="text-danger er">{{ $message }}</span> @enderror
            @else
                @error('editForm.doctor_id') <span class="text-danger er">{{ $message }}</span> @enderror
            @endif
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label>Description</label>
            <textarea wire:model.lazy="{{ $selected_id == 0 ? 'createForm.description' : 'editForm.description' }}"
                class="form-control" placeholder="Medication description..."></textarea>
            @if ($selected_id == 0)
                @error('createForm.description') <span class="text-danger er">{{ $message }}</span> @enderror
            @else
                @error('editForm.description') <span class="text-danger er">{{ $message }}</span> @enderror
            @endif
        </div>
    </div>
</div>

@include('common.modalFooter')
