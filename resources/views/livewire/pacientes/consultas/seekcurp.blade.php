<div class="max-w-4xl p-6 mx-auto bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <h2 class="mb-6 text-xl font-semibold text-gray-900 dark:text-white">{{$componentName}} | {{$pageTitle}}</h2>

    <div class="flex flex-col gap-3 sm:flex-row">
        <div class="flex-1">
            <input
                type="text"
                wire:model="curp"
                placeholder="Ingresa la CURP"
                maxlength="18"
                class="block w-full p-2.5 text-sm text-gray-900 uppercase bg-gray-50 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
            >
        </div>

        <button
            wire:click="buscar"
            wire:loading.attr="disabled"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        >
            Buscar
        </button>
    </div>

    @error('curp')
        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
    @enderror

    <div wire:loading wire:target="buscar" class="mt-3 text-sm text-gray-500 dark:text-gray-400">
        Buscando expediente...
    </div>

    @if($expediente)
        <div class="pt-6 mt-6 border-t border-gray-200 dark:border-gray-700">
            <h3 class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">Paciente encontrado</h3>
            @hasanyrole('SuperAdmin|SuperUser|Registro|Enfermeria|Medico General|Nutrición|Fisioterapia|Dentista')
                <div class="mb-4 text-lg text-right">
                    <button
                        wire:click='newAdd({{ $expediente->id }})'
                        class="relative inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-heading rounded-base group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span class=" relative px-4 py-2.5 transition-all ease-in duration-75 bg-neutral-primary-soft rounded-base group-hover:bg-transparent group-hover:dark:bg-transparent leading-5">
                            Generar Consulta
                        </span>
                    </button>
                </div>
            @endhasanyrole

            @include('livewire.pacientes.consultas.form')

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Nombre</th>
                            <td class="px-6 py-3">{{ $expediente->name }} {{ $expediente->apaterno }} {{ $expediente->amaterno }}</td>
                        </tr>
                        <tr class="border-b bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                            <th class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Edad</th>
                            <td class="px-6 py-3">{{ $expediente->edad }}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Sexo</th>
                            <td class="px-6 py-3">{{ $expediente->sexo }}</td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-700">
                            <th class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">CURP</th>
                            <td class="px-6 py-3">{{ $expediente->curp }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="mt-8 mb-3 font-semibold text-gray-900 text-md dark:text-white">Última consulta</h4>

            @if($ultimaConsulta)
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th class="px-4 py-2">Peso</th>
                                <th class="px-4 py-2">Talla</th>
                                <th class="px-4 py-2">FC</th>
                                <th class="px-4 py-2">FR</th>
                                <th class="px-4 py-2">Temp</th>
                                <th class="px-4 py-2">CA</th>
                                <th class="px-4 py-2">SO2</th>
                                <th class="px-4 py-2">TA</th>
                                <th class="px-4 py-2">IMC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-4 py-2">{{ $ultimaConsulta->peso }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->talla }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->fc }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->fr }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->temp }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->ca }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->so2 }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->ta }}</td>
                                <td class="px-4 py-2">{{ $ultimaConsulta->imc }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="relative mt-6 overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">Observaciones</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->observaciones }}</td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">Permitió oración</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->permitiooracion }}</td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">Interés oración</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->interesoracion }}</td>
                            </tr>
                            <tr class="border-b bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">Especialidad interesada</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->espcialidadintesada }}</td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">Observaciones 2</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->observaciones2 }}</td>
                            </tr>
                            <tr class="bg-gray-50 dark:bg-gray-700">
                                <th class="px-6 py-3 font-medium text-gray-900 dark:text-white">DX/TX</th>
                                <td class="px-6 py-3">{{ $ultimaConsulta->dxtx }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @else
                <div class="p-4 mt-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-700 dark:text-yellow-300">
                    Este paciente aún no tiene consultas registradas.
                </div>
            @endif
        </div>
    @elseif($busquedaRealizada)
        <div class="p-4 mt-6 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-700 dark:text-red-400">
            No se encontró ningún expediente con esa CURP.
        </div>
    @endif

    @include('livewire.pacientes.consultas.form')
</div>
