<div class="relative z-50 grid items-start grid-cols-1 gap-6 lg:grid-cols-4">

    <div class="col-span-1 p-4 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 shadow-inner max-h-[65vh] overflow-y-auto custom-scrollbar">
        <h4 class="sticky top-0 z-10 py-2 mb-4 font-bold text-gray-800 border-b dark:text-white bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
            <i class="mr-2 fas fa-history"></i> Historial del Paciente
        </h4>

        @forelse($historialConsultas as $historia)
            <div class="p-3 mb-4 transition-colors duration-150 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 hover:border-blue-300 dark:hover:border-blue-500">

                <div class="flex items-center justify-between pb-2 mb-2 border-b border-gray-100 dark:border-gray-600">
                    <span class="text-sm font-bold text-blue-700 dark:text-blue-400">
                        {{ $historia->created_at->format('d/m/Y h:i A') }}
                    </span>
                </div>

                <div class="grid grid-cols-2 p-2 mb-3 text-xs text-gray-600 border border-gray-100 rounded gap-x-2 gap-y-1 dark:text-gray-300 bg-gray-50 dark:bg-gray-800 dark:border-gray-600">
                    @if($historia->peso)<p><strong>Peso:</strong> {{ $historia->peso }} kg</p>@endif
                    @if($historia->talla)<p><strong>Talla:</strong> {{ $historia->talla }} cm</p>@endif
                    @if($historia->imc)<p><strong>IMC:</strong> <span class="font-semibold text-red-600 dark:text-red-400">{{ $historia->imc }}</span></p>@endif
                    @if($historia->ta)<p><strong>TA:</strong> {{ $historia->ta }}</p>@endif
                    @if($historia->fc)<p><strong>FC:</strong> {{ $historia->fc }} lpm</p>@endif
                    @if($historia->fr)<p><strong>FR:</strong> {{ $historia->fr }} rpm</p>@endif
                    @if($historia->temp)<p><strong>Temp:</strong> {{ $historia->temp }} °C</p>@endif
                    @if($historia->so2)<p><strong>SO2:</strong> {{ $historia->so2 }}%</p>@endif
                </div>

                <div class="space-y-1 text-xs text-gray-700 dark:text-gray-300">
                    @if($historia->dxtx)
                        <div class="bg-blue-50 dark:bg-gray-800 p-1.5 rounded border-l-2 border-blue-500 mb-1">
                            <strong class="text-blue-700 dark:text-blue-400">DX/TX Gral:</strong> {{ $historia->dxtx }}
                        </div>
                    @endif

                    @if($historia->observaciones)
                        <p><strong>Enfermería:</strong> {{ Str::limit($historia->observaciones, 80) }}</p>
                    @endif

                    @if($historia->dxn)
                        <p><strong>Nutrición:</strong> {{ $historia->dxn }}</p>
                    @endif

                    @if($historia->dxod)
                        <p><strong>Odonto:</strong> {{ $historia->dxod }}</p>
                    @endif
                </div>
            </div>
        @empty
            <div class="flex flex-col items-center justify-center h-32 mt-10 text-gray-400 border-2 border-gray-200 border-dashed rounded-lg dark:text-gray-500 dark:border-gray-700">
                <svg class="w-8 h-8 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <p class="text-sm italic">Sin consultas previas.</p>
            </div>
        @endforelse
    </div>

    <div class="col-span-1 lg:col-span-3 max-h-[65vh] overflow-y-auto pr-3 custom-scrollbar relative z-50">
        <form wire:submit.prevent="Store()" class="space-y-8">

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-blue-700 border-b border-gray-300 dark:text-blue-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-heartbeat"></i> 1. Signos Vitales
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

                    <div>
                        <x-label for="peso" value="Peso (kg)" />
                        <x-input type="number" step="0.01" wire:model.blur='createForm.peso' id="peso" placeholder="0.00" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.peso" />
                    </div>

                    <div>
                        <x-label for="talla" value="Talla (cm/m)" />
                        <x-input type="number" step="0.01" wire:model.blur='createForm.talla' id="talla" placeholder="0.00" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.talla" />
                    </div>

                    <div>
                        <x-label for="imc" value="I.M.C. (Cálculo Auto)" />
                        <x-input type="text" wire:model='createForm.imc' id="imc" class="block w-full text-lg font-bold text-red-700 bg-gray-100 border-red-300 cursor-not-allowed dark:bg-gray-700 dark:text-red-400 dark:border-red-600" readonly />
                    </div>

                    <div>
                        <x-label for="temp" value="Temp (°C)" />
                        <x-input type="number" step="0.1" wire:model='createForm.temp' id="temp" placeholder="36.5" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.temp" />
                    </div>
                    <div>
                        <x-label for="fc" value="Frec. Cardiaca (lpm)" />
                        <x-input type="number" wire:model='createForm.fc' id="fc" placeholder="80" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.fc" />
                    </div>
                    <div>
                        <x-label for="fr" value="Frec. Respiratoria (rpm)" />
                        <x-input type="number" wire:model='createForm.fr' id="fr" placeholder="18" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.fr" />
                    </div>
                    <div>
                        <x-label for="ta" value="Presión Art. (TA)" />
                        <x-input type="text" wire:model='createForm.ta' id="ta" placeholder="120/80" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.ta" />
                    </div>
                    <div>
                        <x-label for="so2" value="Saturación SO2 (%)" />
                        <x-input type="number" step="0.1" wire:model='createForm.so2' id="so2" placeholder="98" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.so2" />
                    </div>
                    <div>
                        <x-label for="ca" value="Circunferencia Abd. (C.A.)" />
                        <x-input type="number" step="0.01" wire:model='createForm.ca' id="ca" placeholder="0.00" class="block w-full text-lg transition-all focus:outline-none focus:ring-4 focus:ring-blue-500 focus:border-blue-500 focus:bg-blue-50 dark:focus:bg-blue-900" />
                        <x-input-error for="createForm.ca" />
                    </div>
                </div>
            </div>

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-blue-700 border-b border-gray-300 dark:text-blue-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-user-md"></i> 2. Medicina General
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="col-span-2">
                        <x-label for="observaciones" value="Observaciones Generales de Enfermería / Triage" />
                        <textarea wire:model='createForm.observaciones' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.observaciones" />
                    </div>
                    <div class="col-span-2">
                        <x-label for="observacionesmg" value="Nota Médica General" />
                        <textarea wire:model='createForm.observacionesmg' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.observacionesmg" />
                    </div>
                    <div>
                        <x-label for="dxmg" value="Diagnóstico (DX General)" />
                        <textarea wire:model='createForm.dxmg' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.dxmg" />
                    </div>
                    <div>
                        <x-label for="txmg" value="Tratamiento (TX General)" />
                        <textarea wire:model='createForm.txmg' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.txmg" />
                    </div>
                    <div class="col-span-2">
                        <x-label for="dxtx" value="Diagnóstico / Tratamiento Conjunto (DX/TX)" />
                        <textarea wire:model='createForm.dxtx' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.dxtx" />
                    </div>
                </div>
            </div>

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-green-700 border-b border-gray-300 dark:text-green-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-apple-alt"></i> 3. Nutrición
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div>
                        <x-label for="dxn" value="Diagnóstico Nutricional (DXN)" />
                        <textarea wire:model='createForm.dxn' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.dxn" />
                    </div>
                    <div>
                        <x-label for="txn" value="Tratamiento Nutricional (TXN)" />
                        <textarea wire:model='createForm.txn' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.txn" />
                    </div>
                </div>
            </div>

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-purple-700 border-b border-gray-300 dark:text-purple-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-crutch"></i> 4. Fisioterapia
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="col-span-2">
                        <x-label for="observacionesft" value="Observaciones Fisioterapia" />
                        <textarea wire:model='createForm.observacionesft' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.observacionesft" />
                    </div>
                    <div>
                        <x-label for="dxft" value="Diagnóstico Físico (DXFT)" />
                        <textarea wire:model='createForm.dxft' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.dxft" />
                    </div>
                    <div>
                        <x-label for="txft" value="Tratamiento Físico (TXFT)" />
                        <textarea wire:model='createForm.txft' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.txft" />
                    </div>
                </div>
            </div>

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-teal-700 border-b border-gray-300 dark:text-teal-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-tooth"></i> 5. Odontología
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                    <div class="col-span-2">
                        <x-label for="observacionesod" value="Observaciones Odontológicas" />
                        <textarea wire:model='createForm.observacionesod' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.observacionesod" />
                    </div>
                    <div>
                        <x-label for="dxod" value="Diagnóstico Dental (DXOD)" />
                        <textarea wire:model='createForm.dxod' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.dxod" />
                    </div>
                    <div>
                        <x-label for="txod" value="Tratamiento Dental (TXOD)" />
                        <textarea wire:model='createForm.txod' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-teal-500 focus:border-teal-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.txod" />
                    </div>
                </div>
            </div>

            <div>
                <h5 class="pb-2 mb-5 text-lg font-bold text-orange-700 border-b border-gray-300 dark:text-orange-400 dark:border-gray-600">
                    <i class="mr-2 fas fa-hands-helping"></i> 6. Área Social / Espiritual
                </h5>
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <div>
                        <x-label for="permitiooracion" value="¿Permitió oración?" />
                        <select wire:model="createForm.permitiooracion" class="block w-full text-sm border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Seleccione...</option>
                            <option value="SI">SÍ</option>
                            <option value="NO">NO</option>
                        </select>
                        <x-input-error for="createForm.permitiooracion" />
                    </div>
                    <div>
                        <x-label for="interesoracion" value="¿Mostró Interés?" />
                        <select wire:model="createForm.interesoracion" class="block w-full text-sm border border-gray-300 rounded-lg focus:ring-orange-500 focus:border-orange-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                            <option value="">Seleccione...</option>
                            <option value="ALTO">ALTO</option>
                            <option value="MEDIO">MEDIO</option>
                            <option value="BAJO">BAJO</option>
                            <option value="NULO">NULO</option>
                        </select>
                        <x-input-error for="createForm.interesoracion" />
                    </div>
                    <div>
                        <x-label for="espcialidadintesada" value="Especialidad de Interés" />
                        <x-input type="text" wire:model='createForm.espcialidadintesada' placeholder="Ej. Psicología" class="block w-full" />
                        <x-input-error for="createForm.espcialidadintesada" />
                    </div>
                    <div class="col-span-3">
                        <x-label for="observaciones2" value="Otras Observaciones Generales" />
                        <textarea wire:model='createForm.observaciones2' rows="3" class="block p-2.5 w-full text-sm rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:placeholder-gray-400"></textarea>
                        <x-input-error for="createForm.observaciones2" />
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<style>
/* Estilización de la barra de scroll para navegadores Webkit (Chrome, Safari, Edge) */
.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
}
.custom-scrollbar::-webkit-scrollbar-track {
    background: transparent;
    border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(156, 163, 175, 0.5); /* gray-400 con opacidad */
    border-radius: 10px;
    border: 2px solid transparent; /* Crea un efecto de padding */
    background-clip: content-box;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
    background-color: rgba(107, 114, 128, 0.7); /* gray-500 con opacidad */
}

/* Soporte para Firefox */
.custom-scrollbar {
    scrollbar-width: thin;
    scrollbar-color: rgba(156, 163, 175, 0.5) transparent;
}
</style>
