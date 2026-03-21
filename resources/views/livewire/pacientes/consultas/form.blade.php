<x-dialog-modal wire:model='open' maxWidth="6xl">
    <x-slot name="title">
        <div class="flex items-center w-full p-4 space-x-2 border-b border-gray-200 rounded-t dark:border-gray-600">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                NUEVA CONSULTA MÉDICA
            </h3>
        </div>
    </x-slot>
    <x-slot name="content">
        @include('livewire.pacientes.consultas.createComponent')
    </x-slot>
    <x-slot name="footer">
        <div class="flex justify-end w-full pt-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
            <button wire:click.prevent='resetUI()' type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Cancelar</button>
            <button wire:click.prevent='Store()' type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700">Guardar Consulta</button>
        </div>
    </x-slot>
</x-dialog-modal>
