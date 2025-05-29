<div>
    <div class="row sales layout-top-spacing">
        <div class="col-sm-12">
            <div class="widget widget-chart-one">
                <div class="widget-heading">
                    <h4 class="card-title">
                        <b>{{ $componentName }} | {{ $pageTitle }}</b>
                    </h4>
                    <ul class="tabs tab-pills">
                        @can('create medications')
                            <li>
                                <a href="javascript:void(0)" class="tabmenu bg-dark" wire:click="newAdd">
                                    Agregar
                                </a>
                            </li>
                        @endcan
                    </ul>
                </div>
                {{-- @can('medication_search') --}} {{-- Assuming search is always available or controlled by 'view medications' --}}
                @include('common.searchbox')
                {{-- @endcan --}}

                <div class="widget-content">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped mt-1">
                            <thead class="text-white" style="background: #3B3F5C">
                                <tr>
                                    @foreach ($headers as $header)
                                        <th class="table-th text-white">{{ $header }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medications as $medication)
                                    <tr>
                                        <td>{{ $medication->id }}</td>
                                        <td>{{ $medication->name }}</td>
                                        <td>{{ $medication->patient->name ?? 'N/A' }}</td>
                                        <td>{{ $medication->doctor->name ?? 'N/A' }}</td>
                                        <td>{{ $medication->quantity }}</td>
                                        <td class="text-center">
                                            @can('edit medications')
                                                <a href="javascript:void(0)" wire:click="Editar({{ $medication->id }})"
                                                    class="btn btn-dark mtmobile" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @endcan
                                            @can('delete medications')
                                                <a href="javascript:void(0)"
                                                    onclick="Confirm('{{ $medication->id }}', 'deleteRecord', '¿CONFIRMAS ELIMINAR EL REGISTRO?')"
                                                    class="btn btn-dark" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $medications->links() }}
                    </div>
                </div>
            </div>
        </div>
        @include('livewire.storage.form')
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.livewire.on('show-modal', msg => {
                $('#theModal').modal('show')
            });
            window.livewire.on('hide-modal', msg => {
                $('#theModal').modal('hide')
            });
            window.livewire.on('delete_confirmation', (message) => {
                if (confirm(message)) {
                    window.livewire.emit('deleteRecord');
                }
            });
        });

        function Confirm(id, eventName, text) {
            if (confirm(text)) {
                window.livewire.emit(eventName, id);
            }
        }
    </script>
</div>
