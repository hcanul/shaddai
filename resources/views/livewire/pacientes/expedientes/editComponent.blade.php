<div>
    <form eire:submit.prevent="Store()" class="space-y-6">
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">I.- FICHA DE IDENTIFICACIÓN</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Usuario</x-label>
                <x-input type="text" wire:model='editForm.name' id="editForm.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="editForm.name" />
            </div>
            <div>
                <x-label for="editForm.apaterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno</x-label>
                <x-input type="text" wire:model='editForm.apaterno' id="editForm.apaterno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="editForm.apaterno" />
            </div>
            <div>
                <x-label for="editForm.amaterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno</x-label>
                <x-input type="text" wire:model='editForm.amaterno' id="editForm.amaterno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="editForm.amaterno" />
            </div>
            <div>
                <x-label for="editForm.edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</x-label>
                <x-input type="number" wire:model='editForm.edad' id="editForm.edad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="editForm.edad" />
            </div>
            <div>
                <x-label for="editForm.sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</x-label>
                <select wire:model='editForm.sexo' id="editForm.sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="FEMENINO" >FEMENINO</option>
                    <option value="MASCULINO" >MASCULINO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="editForm.sexo" />
            </div>
            <div>
                <x-label for="editForm.fnacimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</x-label>
                <x-input type="date" wire:model='editForm.fnacimiento' id="editForm.fnacimiento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.fnacimiento" />
            </div>
            <div>
                <x-label for="editForm.curp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C. U. R. P.</x-label>
                <x-input type="text" wire:model='editForm.curp' id="editForm.curp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="editForm.curp" />
            </div>
            <div>
                <x-label for="editForm.nacionalidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nacionalidad</x-label>
                <x-input type="text" wire:model='editForm.nacionalidad' id="editForm.nacionalidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.nacionalidad" />
            </div>
            <div>
                <x-label for="editForm.ecivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado Civil</x-label>
                <select wire:model='editForm.ecivil' id="editForm.ecivil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="CASADO" >CASADO</option>
                    <option value="SOLTERO" >SOLTERO</option>
                    <option value="VIUDO" >VIUDO</option>
                    <option value="DIVORCIADO" >DIVORCIADO</option>
                    <option value="AMASIATO" >AMASIATO</option>
                </select>
                <x-input-error for="editForm.ecivil" />
            </div>
            <div>
                <x-label for="editForm.estudios" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grado de Estudios</x-label>
                <select wire:model='editForm.estudios' id="editForm.estudios" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="PRIMARIA" >PRIMARIA</option>
                    <option value="SECUNDARIA" >SECUNDARIA</option>
                    <option value="BACHILLER" >BACHILLER</option>
                    <option value="LICENCIATURA" >LICENCIATURA</option>
                    <option value="MAESTRIA" >MAESTRIA</option>
                    <option value="POSGRADO" >POSGRADO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="editForm.estudios" />
            </div>
            <div>
                <x-label for="editForm.ocupacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ocupacion</x-label>
                <select wire:model='editForm.ocupacion' id="editForm.ocupacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="CAMPECINO" >CAMPECINO</option>
                    <option value="OBRERO" >OBRERO</option>
                    <option value="COMERCIANTE" >COMERCIANTE</option>
                    <option value="AMA DE CASA" >AMA DE CASA</option>
                    <option value="ESTUDIANTE" >ESTUDIANTE</option>
                    <option value="EMPLEADO" >EMPLEADO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="editForm.ocupacion" />
            </div>
            <div>
                <x-label for="editForm.religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</x-label>
                <x-input type="text" wire:model='editForm.religion' id="editForm.religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.religion" />
            </div>
            <div>
                <x-label for="editForm.street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</x-label>
                <x-input type="text" wire:model='editForm.street' id="editForm.street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.street" />
            </div>
            <div>
                <x-label for="editForm.number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de casa</x-label>
                <x-input type="number" wire:model='editForm.number' id="editForm.number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.number" />
            </div>
            <div>
                <x-label for="editForm.cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Postal</x-label>
                <x-input type="number" wire:model='editForm.cp' id="editForm.cp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.cp" />
            </div>
            <div>
                <x-label for="editForm.colony" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia</x-label>
                <x-input type="text" wire:model='editForm.colony' id="editForm.colony" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.colony" />
            </div>
            <div>
                <x-label for="editForm.town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comunidad o Ciudad</x-label>
                <x-input type="text" wire:model='editForm.town' id="editForm.town" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.town" />
            </div>
            <div>
                <x-label for="editForm.municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipio</x-label>
                <x-input type="text" wire:model='editForm.municipio' id="editForm.municipio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.municipio" />
            </div>
            <div>
                <x-label for="editForm.telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</x-label>
                <x-input type="number" wire:model='editForm.telefono' id="editForm.telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.telefono" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">I.- PERTENECE A ALGUN GRUPO DE VULNERABILIDAD</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.vulnerable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Situacion de vulneravilidad</x-label>
                <select wire:model='editForm.vulnerable' id="editForm.vulnerable"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="NINGUNO" >NINGUNO</option>
                    <option value="DISCAPACIDAD" >DISCAPACIDAD</option>
                    <option value="INDIGENA" >INDIGENA</option>
                    <option value="ADULTO MAYOR" >ADULTO MAYOR</option>
                    <option value="MADRE ASIT. SOCIAL" >MADRE ASIT. SOCIAL</option>
                    <option value="MIGRANTE" >MIGRANTE</option>
                </select>
                <x-input-error for="editForm.vulnerable" />
            </div>
            <div>
                <x-label for="editForm.vivecasa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Viven en Casa</x-label>
                <x-input type="number" wire:model='editForm.vivecasa' id="editForm.vivecasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.vivecasa" />
            </div>
            <div>
                <x-label for="editForm.trabajan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabaja en casa</x-label>
                <x-input type="number" wire:model='editForm.trabajan' id="editForm.trabajan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.trabajan" />
            </div>
            <div>
                <x-label for="editForm.estudian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estudia</x-label>
                <x-input type="number" wire:model='editForm.estudian' id="editForm.estudian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.estudian" />
            </div>
            <div>
                <x-label for="editForm.trabajaactual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabaja actualmente</x-label>
                <select wire:model='editForm.trabajaactual' id="editForm.trabajaactual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.trabajaactual" />
            </div>
            <div>
                <x-label for="editForm.depeneconomicos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dependientes Economicos</x-label>
                <x-input type="number" wire:model='editForm.depeneconomicos' id="editForm.depeneconomicos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.depeneconomicos" />
            </div>
            <div>
                <x-label for="editForm.segsoci" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seguridad Social</x-label>
                <select wire:model='editForm.segsoci' id="editForm.segsoci"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null">Elija una opcion</option>
                    <option value="NINGUNO">NINGUNO</option>
                    <option value="ISSTE">ISSTE</option>
                    <option value="IMSS">IMSS</option>
                    <option value="INSABI">INSABI</option>
                </select>
                <x-input-error for="editForm.segsoci" />
            </div>
            <div>
                <x-label for="editForm.apoyogob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Programa de apoyo del gobierno</x-label>
                <select wire:model='editForm.apoyogob' id="editForm.apoyogob"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="NINGUNO" >NINGUNO</option>
                    <option value="Programas de bienestar" >Programas de bienestar</option>
                    <option value="Programa para el Bienestar de las Personas Adultas Mayores'" >Programa para el Bienestar de las Personas Adultas Mayores'</option>
                    <option value="Programa Pensión para el Bienestar de las Personas con Discapacidad" >Programa Pensión para el Bienestar de las Personas con Discapacidad</option>
                    <option value="Programa Sembrando Vida" >Programa Sembrando Vida</option>
                    <option value="Programa para el Bienestar de Niños y Niñas, Hijos de Madres Trabajadoras" >Programa para el Bienestar de Niños y Niñas, Hijos de Madres Trabajadoras</option>
                    <option value="Programa 3x1 para Migrantes" >Programa 3x1 para Migrantes</option>
                    <option value="Programa para el Bienestar de las Personas en Emergencia Social o Natural" >Programa para el Bienestar de las Personas en Emergencia Social o Natural</option>
                    <option value="Programas de educación" >Programas de educación</option>
                    <option value="Becas para el Bienestar Benito Juárez Educación Básica" >Becas para el Bienestar Benito Juárez Educación Básica</option>
                    <option value="Becas para el Bienestar Benito Juárez Educación Básica" >Becas para el Bienestar Benito Juárez Educación Básica</option>
                    <option value="Programa Becas de apoyo a la Educación Básica de Madres Jóvenes y Jóvenes Embarazadas (PROMAJOVEN)" >Programa Becas de apoyo a la Educación Básica de Madres Jóvenes y Jóvenes Embarazadas (PROMAJOVEN)</option>
                    <option value="Programa Educativo Rural" >Programa Educativo Rural</option>
                </select>
                <x-input-error for="editForm.apoyogob" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">III.- ANTECEDENTES MEDICOS</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.tuberculosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tuberculosis</x-label>
                <select wire:model='editForm.tuberculosis' id="editForm.tuberculosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.tuberculosis" />
            </div>
            <div>
                <x-label for="editForm.dm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DM</x-label>
                <select wire:model='editForm.dm' id="editForm.dm"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.dm" />
            </div>
            <div>
                <x-label for="editForm.hta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HTA</x-label>
                <select wire:model='editForm.hta' id="editForm.hta"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.hta" />
            </div>
            <div>
                <x-label for="editForm.enfneoplasticas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Neoplasticas</x-label>
                <select wire:model='editForm.enfneoplasticas' id="editForm.enfneoplasticas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfneoplasticas" />
            </div>
            <div>
                <x-label for="editForm.cardiopatia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cardiopatias</x-label>
                <select wire:model='editForm.cardiopatia' id="editForm.cardiopatia"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.cardiopatia" />
            </div>
            <div>
                <x-label for="editForm.hepatopatias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hepatopatias</x-label>
                <select wire:model='editForm.hepatopatias' id="editForm.hepatopatias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.hepatopatias" />
            </div>
            <div>
                <x-label for="editForm.nefropatias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nefropatias</x-label>
                <select wire:model='editForm.nefropatias' id="editForm.nefropatias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.nefropatias" />
            </div>
            <div>
                <x-label for="editForm.enfendocrinas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Endocrinas</x-label>
                <select wire:model='editForm.enfendocrinas' id="editForm.enfendocrinas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfendocrinas" />
            </div>
            <div>
                <x-label for="editForm.enfmentales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Mentales</x-label>
                <select wire:model='editForm.enfmentales' id="editForm.enfmentales"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfmentales" />
            </div>
            <div>
                <x-label for="editForm.asma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASMA</x-label>
                <select wire:model='editForm.asma' id="editForm.asma"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.asma" />
            </div>
            <div>
                <x-label for="editForm.enfhematologicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Hematologicas</x-label>
                <select wire:model='editForm.enfhematologicas' id="editForm.enfhematologicas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfhematologicas" />
            </div>
            <div>
                <x-label for="editForm.enfinfeccinfanc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Infecciosas</x-label>
                <select wire:model='editForm.enfinfeccinfanc' id="editForm.enfinfeccinfanc"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfinfeccinfanc" />
            </div>
            <div>
                <x-label for="editForm.tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TB</x-label>
                <select wire:model='editForm.tb' id="editForm.tb"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.tb" />
            </div>
            <div>
                <x-label for="editForm.enfvenereas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Venereas</x-label>
                <select wire:model='editForm.enfvenereas' id="editForm.enfvenereas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfvenereas" />
            </div>
            <div>
                <x-label for="editForm.fiebre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fiebre</x-label>
                <select wire:model='editForm.fiebre' id="editForm.fiebre"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.fiebre" />
            </div>
            <div>
                <x-label for="editForm.tifoidea" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tifoidea</x-label>
                <select wire:model='editForm.tifoidea' id="editForm.tifoidea"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.tifoidea" />
            </div>
            <div>
                <x-label for="editForm.salmonelosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salmonelosis</x-label>
                <select wire:model='editForm.salmonelosis' id="editForm.salmonelosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.salmonelosis" />
            </div>
            <div>
                <x-label for="editForm.neumonias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Neumonias</x-label>
                <select wire:model='editForm.neumonias' id="editForm.neumonias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.neumonias" />
            </div>
            <div>
                <x-label for="editForm.paludismo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paludismo</x-label>
                <select wire:model='editForm.paludismo' id="editForm.paludismo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.paludismo" />
            </div>
            <div>
                <x-label for="editForm.parasitosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parasitosis</x-label>
                <select wire:model='editForm.parasitosis' id="editForm.parasitosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.parasitosis" />
            </div>
            <div>
                <x-label for="editForm.enfalergicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Alergicas</x-label>
                <select wire:model='editForm.enfalergicas' id="editForm.enfalergicas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.enfalergicas" />
            </div>
            <div>
                <x-label for="editForm.intervenciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervenciones</x-label>
                <select wire:model='editForm.intervenciones' id="editForm.intervenciones"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.intervenciones" />
            </div>
            <div>
                <x-label for="editForm.qx" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">QX</x-label>
                <select wire:model='editForm.qx' id="editForm.qx"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.qx" />
            </div>
            <div>
                <x-label for="editForm.hospitalizacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospitalización</x-label>
                <select wire:model='editForm.hospitalizacion' id="editForm.hospitalizacion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.hospitalizacion" />
            </div>
            <div>
                <x-label for="editForm.traumatismos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Traumatismo</x-label>
                <select wire:model='editForm.traumatismos' id="editForm.traumatismos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.traumatismos" />
            </div>
            <div>
                <x-label for="editForm.perdiconocimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perdión el Conocimiento</x-label>
                <select wire:model='editForm.perdiconocimiento' id="editForm.perdiconocimiento"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.perdiconocimiento" />
            </div>
            <div>
                <x-label for="editForm.transfusiones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transfusiones</x-label>
                <select wire:model='editForm.transfusiones' id="editForm.transfusiones"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.transfusiones" />
            </div>
            <div>
                <x-label for="editForm.intolmedicamentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intolerancia a Medicamentos</x-label>
                <select wire:model='editForm.intolmedicamentos' id="editForm.intolmedicamentos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.intolmedicamentos" />
            </div>
            <div>
                <x-label for="editForm.tiposangre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Sangre</x-label>
                <select wire:model='editForm.tiposangre' id="editForm.tiposangre"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="A Rh+" >A Rh+</option>
                    <option value="A Rh-" >A Rh-</option>
                    <option value="B Rh+" >B Rh+</option>
                    <option value="B Rh-" >B Rh-</option>
                    <option value="AB Rh+" >AB Rh+</option>
                    <option value="AB Rh-" >AB Rh-</option>
                    <option value="O Rh+" >O Rh+</option>
                    <option value="O Rh-" >O Rh-</option>
                </select>
                <x-input-error for="editForm.tiposangre" />
            </div>
            <div>
                <x-label for="editForm.alergias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alergias</x-label>
                <x-input type="text" wire:model='editForm.alergias' id="editForm.alergias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.alergias" />
            </div>
            <div>
                <x-label for="editForm.banio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Baños Diarios</x-label>
                <x-input type="number" wire:model='editForm.banio' id="editForm.banio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.banio" />
            </div>
            <div>
                <x-label for="editForm.lavdientes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lavado de Deintes?</x-label>
                <x-input type="number" wire:model='editForm.lavdientes' id="editForm.lavdientes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.lavdientes" />
            </div>
            <div>
                <x-label for="editForm.tabaquismos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuma?</x-label>
                <select wire:model='editForm.tabaquismos' id="editForm.tabaquismos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.tabaquismos" />
            </div>
            <div>
                <x-label for="editForm.alcoholismo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bebe?</x-label>
                <select wire:model='editForm.alcoholismo' id="editForm.alcoholismo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.alcoholismo" />
            </div>
            <div>
                <x-label for="editForm.toxicomanias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Toxicomanias?</x-label>
                <select wire:model='editForm.toxicomanias' id="editForm.toxicomanias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.toxicomanias" />
            </div>
            <div>
                <x-label for="editForm.deportes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Practica algún deporte?</x-label>
                <x-input type="text" wire:model='editForm.deportes' id="editForm.deportes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.deportes" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">IV.- NOTE DE EVOLUCIÓN</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso</x-label>
                <x-input type="number" wire:model='editForm.peso' id="editForm.peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.peso" />
            </div>
            <div>
                <x-label for="editForm.talla" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Talla</x-label>
                <x-input type="number" wire:model='editForm.talla' id="editForm.talla" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.talla" />
            </div>
            <div>
                <x-label for="editForm.fr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FC</x-label>
                <x-input type="number" wire:model='editForm.fr' id="editForm.fr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.fr" />
            </div>
            <div>
                <x-label for="editForm.talla" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FR</x-label>
                <x-input type="number" wire:model='editForm.talla' id="editForm.talla" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.talla" />
            </div>
            <div>
                <x-label for="editForm.temp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperatura</x-label>
                <x-input type="number" wire:model='editForm.temp' id="editForm.temp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.temp" />
            </div>
            <div>
                <x-label for="editForm.ca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CA</x-label>
                <x-input type="number" wire:model='editForm.ca' id="editForm.ca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.ca" />
            </div>
            <div>
                <x-label for="editForm.so2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SO2</x-label>
                <x-input type="number" wire:model='editForm.so2' id="editForm.so2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.so2" />
            </div>
            <div>
                <x-label for="editForm.ta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TA</x-label>
                <x-input type="text" wire:model='editForm.ta' id="editForm.ta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.ta" />
            </div>
            <div>
                <x-label for="editForm.imc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IMC</x-label>
                <x-input type="number" wire:model='editForm.imc' id="editForm.imc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="editForm.imc" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Nutricion</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.observacionesn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='editForm.observacionesn' id="editForm.observacionesn" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.observacionesn" />
            </div>
            <div>
                <x-label for="editForm.txn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='editForm.txn' id="editForm.txn" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.txn" />
            </div>
            <div>
                <x-label for="editForm.dxn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='editForm.dxn' id="editForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.dxn" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Medicina General</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.observacionesmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='editForm.observacionesmg' id="editForm.observacionesmg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.observacionesmg" />
            </div>
            <div>
                <x-label for="editForm.txmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='editForm.txmg' id="editForm.txmg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.txmg" />
            </div>
            <div>
                <x-label for="editForm.dxmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='editForm.dxmg' id="editForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.dxmg" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Fisioterapia</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.observacionesft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='editForm.observacionesft' id="editForm.observacionesft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.observacionesft" />
            </div>
            <div>
                <x-label for="editForm.txft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='editForm.txft' id="editForm.txft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.txft" />
            </div>
            <div>
                <x-label for="editForm.dxft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='editForm.dxft' id="editForm.dxft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.dxft" />
            </div>
        </div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Odontologia</button>
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.observacionesod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='editForm.observacionesod' id="editForm.observacionesod" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.observacionesod" />
            </div>
            <div>
                <x-label for="editForm.txod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='editForm.txod' id="editForm.txod" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.txod" />
            </div>
            <div>
                <x-label for="editForm.dxod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='editForm.dxod' id="editForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.dxod" />
            </div>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="editForm.permitiooracion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permimtio oración?</x-label>
                <select wire:model='editForm.permitiooracion' id="editForm.permitiooracion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.permitiooracion" />
            </div>
            <div>
                <x-label for="editForm.interesoracion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mostro interes en visita o lista oracion?</x-label>
                <select wire:model='editForm.interesoracion' id="editForm.interesoracion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.interesoracion" />
            </div>
            <div>
                <x-label for="editForm.espcialidadintesada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad por la que mostro mayor interes?</x-label>
                <select wire:model='editForm.espcialidadintesada' id="editForm.espcialidadintesada"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="editForm.espcialidadintesada" />
            </div>
            <div>
                <x-label for="editForm.observaciones2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='editForm.observaciones2' id="editForm.observaciones2" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="editForm.observaciones2" />
            </div>
        </div>
    </form>
</div>
