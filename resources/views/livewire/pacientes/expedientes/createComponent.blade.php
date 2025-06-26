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
                <x-label for="createForm.name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Usuario</x-label>
                <x-input type="text" wire:model='createForm.name' id="createForm.name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="createForm.name" />
            </div>
            <div>
                <x-label for="createForm.apaterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Paterno</x-label>
                <x-input type="text" wire:model='createForm.apaterno' id="createForm.apaterno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="createForm.apaterno" />
            </div>
            <div>
                <x-label for="createForm.amaterno" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido Materno</x-label>
                <x-input type="text" wire:model='createForm.amaterno' id="createForm.amaterno" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="createForm.amaterno" />
            </div>
            <div>
                <x-label for="createForm.edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</x-label>
                <x-input type="number" wire:model='createForm.edad' id="createForm.edad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="createForm.edad" />
            </div>
            <div>
                <x-label for="createForm.sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</x-label>
                <select wire:model='createForm.sexo' id="createForm.sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="FEMENINO" >FEMENINO</option>
                    <option value="MASCULINO" >MASCULINO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="createForm.sexo" />
            </div>
            <div>
                <x-label for="createForm.fnacimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de Nacimiento</x-label>
                <x-input type="date" wire:model='createForm.fnacimiento' id="createForm.fnacimiento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.fnacimiento" />
            </div>
            <div>
                <x-label for="createForm.curp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">C. U. R. P.</x-label>
                <x-input type="text" wire:model='createForm.curp' id="createForm.curp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  />
                <x-input-error for="createForm.curp" />
            </div>
            <div>
                <x-label for="createForm.nacionalidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nacionalidad</x-label>
                <x-input type="text" wire:model='createForm.nacionalidad' id="createForm.nacionalidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.nacionalidad" />
            </div>
            <div>
                <x-label for="createForm.ecivil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado Civil</x-label>
                <select wire:model='createForm.ecivil' id="createForm.ecivil" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="CASADO" >CASADO</option>
                    <option value="SOLTERO" >SOLTERO</option>
                    <option value="VIUDO" >VIUDO</option>
                    <option value="DIVORCIADO" >DIVORCIADO</option>
                    <option value="AMASIATO" >AMASIATO</option>
                </select>
                <x-input-error for="createForm.ecivil" />
            </div>
            <div>
                <x-label for="createForm.estudios" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grado de Estudios</x-label>
                <select wire:model='createForm.estudios' id="createForm.estudios" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="PRIMARIA" >PRIMARIA</option>
                    <option value="SECUNDARIA" >SECUNDARIA</option>
                    <option value="BACHILLER" >BACHILLER</option>
                    <option value="LICENCIATURA" >LICENCIATURA</option>
                    <option value="MAESTRIA" >MAESTRIA</option>
                    <option value="POSGRADO" >POSGRADO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="createForm.estudios" />
            </div>
            <div>
                <x-label for="createForm.ocupacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ocupacion</x-label>
                <select wire:model='createForm.ocupacion' id="createForm.ocupacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="CAMPECINO" >CAMPECINO</option>
                    <option value="OBRERO" >OBRERO</option>
                    <option value="COMERCIANTE" >COMERCIANTE</option>
                    <option value="AMA DE CASA" >AMA DE CASA</option>
                    <option value="ESTUDIANTE" >ESTUDIANTE</option>
                    <option value="EMPLEADO" >EMPLEADO</option>
                    <option value="OTRO" >OTRO</option>
                </select>
                <x-input-error for="createForm.ocupacion" />
            </div>
            <div>
                <x-label for="createForm.religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Religion</x-label>
                <x-input type="text" wire:model='createForm.religion' id="createForm.religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.religion" />
            </div>
            <div>
                <x-label for="createForm.street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</x-label>
                <x-input type="text" wire:model='createForm.street' id="createForm.street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.street" />
            </div>
            <div>
                <x-label for="createForm.number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numero de casa</x-label>
                <x-input type="number" wire:model='createForm.number' id="createForm.number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.number" />
            </div>
            <div>
                <x-label for="createForm.cp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Codigo Postal</x-label>
                <x-input type="number" wire:model='createForm.cp' id="createForm.cp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.cp" />
            </div>
            <div>
                <x-label for="createForm.colony" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Colonia</x-label>
                <x-input type="text" wire:model='createForm.colony' id="createForm.colony" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.colony" />
            </div>
            <div>
                <x-label for="createForm.town" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Comunidad o Ciudad</x-label>
                <x-input type="text" wire:model='createForm.town' id="createForm.town" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.town" />
            </div>
            <div>
                <x-label for="createForm.municipio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Municipio</x-label>
                <x-input type="text" wire:model='createForm.municipio' id="createForm.municipio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.municipio" />
            </div>
            <div>
                <x-label for="createForm.telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</x-label>
                <x-input type="number" wire:model='createForm.telefono' id="createForm.telefono" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.telefono" />
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
                <x-label for="createForm.vulnerable" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Situacion de vulneravilidad</x-label>
                <select wire:model='createForm.vulnerable' id="createForm.vulnerable"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="NINGUNO" >NINGUNO</option>
                    <option value="DISCAPACIDAD" >DISCAPACIDAD</option>
                    <option value="INDIGENA" >INDIGENA</option>
                    <option value="ADULTO MAYOR" >ADULTO MAYOR</option>
                    <option value="MADRE ASIT. SOCIAL" >MADRE ASIT. SOCIAL</option>
                    <option value="MIGRANTE" >MIGRANTE</option>
                </select>
                <x-input-error for="createForm.vulnerable" />
            </div>
            <div>
                <x-label for="createForm.vivecasa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Viven en Casa</x-label>
                <x-input type="number" wire:model='createForm.vivecasa' id="createForm.vivecasa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.vivecasa" />
            </div>
            <div>
                <x-label for="createForm.trabajan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabaja en casa</x-label>
                <x-input type="number" wire:model='createForm.trabajan' id="createForm.trabajan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.trabajan" />
            </div>
            <div>
                <x-label for="createForm.estudian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estudia</x-label>
                <x-input type="number" wire:model='createForm.estudian' id="createForm.estudian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.estudian" />
            </div>
            <div>
                <x-label for="createForm.trabajaactual" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Trabaja actualmente</x-label>
                <select wire:model='createForm.trabajaactual' id="createForm.trabajaactual" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.trabajaactual" />
            </div>
            <div>
                <x-label for="createForm.depeneconomicos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dependientes Economicos</x-label>
                <x-input type="number" wire:model='createForm.depeneconomicos' id="createForm.depeneconomicos" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.depeneconomicos" />
            </div>
            <div>
                <x-label for="createForm.segsoci" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seguridad Social</x-label>
                <select wire:model='createForm.segsoci' id="createForm.segsoci"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null">Elija una opcion</option>
                    <option value="NINGUNO">NINGUNO</option>
                    <option value="ISSTE">ISSTE</option>
                    <option value="IMSS">IMSS</option>
                    <option value="INSABI">INSABI</option>
                </select>
                <x-input-error for="createForm.segsoci" />
            </div>
            <div>
                <x-label for="createForm.apoyogob" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Programa de apoyo del gobierno</x-label>
                <select wire:model='createForm.apoyogob' id="createForm.apoyogob"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <x-input-error for="createForm.apoyogob" />
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
                <x-label for="createForm.tuberculosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tuberculosis</x-label>
                <select wire:model='createForm.tuberculosis' id="createForm.tuberculosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.tuberculosis" />
            </div>
            <div>
                <x-label for="createForm.dm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DM</x-label>
                <select wire:model='createForm.dm' id="createForm.dm"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.dm" />
            </div>
            <div>
                <x-label for="createForm.hta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">HTA</x-label>
                <select wire:model='createForm.hta' id="createForm.hta"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.hta" />
            </div>
            <div>
                <x-label for="createForm.enfneoplasticas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Neoplasticas</x-label>
                <select wire:model='createForm.enfneoplasticas' id="createForm.enfneoplasticas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfneoplasticas" />
            </div>
            <div>
                <x-label for="createForm.cardiopatia" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cardiopatias</x-label>
                <select wire:model='createForm.cardiopatia' id="createForm.cardiopatia"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.cardiopatia" />
            </div>
            <div>
                <x-label for="createForm.hepatopatias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hepatopatias</x-label>
                <select wire:model='createForm.hepatopatias' id="createForm.hepatopatias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.hepatopatias" />
            </div>
            <div>
                <x-label for="createForm.nefropatias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nefropatias</x-label>
                <select wire:model='createForm.nefropatias' id="createForm.nefropatias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.nefropatias" />
            </div>
            <div>
                <x-label for="createForm.enfendocrinas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Endocrinas</x-label>
                <select wire:model='createForm.enfendocrinas' id="createForm.enfendocrinas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfendocrinas" />
            </div>
            <div>
                <x-label for="createForm.enfmentales" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Mentales</x-label>
                <select wire:model='createForm.enfmentales' id="createForm.enfmentales"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfmentales" />
            </div>
            <div>
                <x-label for="createForm.asma" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ASMA</x-label>
                <select wire:model='createForm.asma' id="createForm.asma"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.asma" />
            </div>
            <div>
                <x-label for="createForm.enfhematologicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Hematologicas</x-label>
                <select wire:model='createForm.enfhematologicas' id="createForm.enfhematologicas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfhematologicas" />
            </div>
            <div>
                <x-label for="createForm.enfinfeccinfanc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Infecciosas</x-label>
                <select wire:model='createForm.enfinfeccinfanc' id="createForm.enfinfeccinfanc"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfinfeccinfanc" />
            </div>
            <div>
                <x-label for="createForm.tb" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TB</x-label>
                <select wire:model='createForm.tb' id="createForm.tb"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.tb" />
            </div>
            <div>
                <x-label for="createForm.enfvenereas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Venereas</x-label>
                <select wire:model='createForm.enfvenereas' id="createForm.enfvenereas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfvenereas" />
            </div>
            <div>
                <x-label for="createForm.fiebre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fiebre</x-label>
                <select wire:model='createForm.fiebre' id="createForm.fiebre"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.fiebre" />
            </div>
            <div>
                <x-label for="createForm.tifoidea" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tifoidea</x-label>
                <select wire:model='createForm.tifoidea' id="createForm.tifoidea"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.tifoidea" />
            </div>
            <div>
                <x-label for="createForm.salmonelosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Salmonelosis</x-label>
                <select wire:model='createForm.salmonelosis' id="createForm.salmonelosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.salmonelosis" />
            </div>
            <div>
                <x-label for="createForm.neumonias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Neumonias</x-label>
                <select wire:model='createForm.neumonias' id="createForm.neumonias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.neumonias" />
            </div>
            <div>
                <x-label for="createForm.paludismo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paludismo</x-label>
                <select wire:model='createForm.paludismo' id="createForm.paludismo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.paludismo" />
            </div>
            <div>
                <x-label for="createForm.parasitosis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Parasitosis</x-label>
                <select wire:model='createForm.parasitosis' id="createForm.parasitosis"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.parasitosis" />
            </div>
            <div>
                <x-label for="createForm.enfalergicas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Enfermedades Alergicas</x-label>
                <select wire:model='createForm.enfalergicas' id="createForm.enfalergicas"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.enfalergicas" />
            </div>
            <div>
                <x-label for="createForm.intervenciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intervenciones</x-label>
                <select wire:model='createForm.intervenciones' id="createForm.intervenciones"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.intervenciones" />
            </div>
            <div>
                <x-label for="createForm.qx" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">QX</x-label>
                <select wire:model='createForm.qx' id="createForm.qx"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.qx" />
            </div>
            <div>
                <x-label for="createForm.hospitalizacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hospitalización</x-label>
                <select wire:model='createForm.hospitalizacion' id="createForm.hospitalizacion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.hospitalizacion" />
            </div>
            <div>
                <x-label for="createForm.traumatismos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Traumatismo</x-label>
                <select wire:model='createForm.traumatismos' id="createForm.traumatismos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.traumatismos" />
            </div>
            <div>
                <x-label for="createForm.perdiconocimiento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perdión el Conocimiento</x-label>
                <select wire:model='createForm.perdiconocimiento' id="createForm.perdiconocimiento"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.perdiconocimiento" />
            </div>
            <div>
                <x-label for="createForm.transfusiones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transfusiones</x-label>
                <select wire:model='createForm.transfusiones' id="createForm.transfusiones"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.transfusiones" />
            </div>
            <div>
                <x-label for="createForm.intolmedicamentos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Intolerancia a Medicamentos</x-label>
                <select wire:model='createForm.intolmedicamentos' id="createForm.intolmedicamentos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.intolmedicamentos" />
            </div>
            <div>
                <x-label for="createForm.tiposangre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de Sangre</x-label>
                <select wire:model='createForm.tiposangre' id="createForm.tiposangre"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <x-input-error for="createForm.tiposangre" />
            </div>
            <div>
                <x-label for="createForm.alergias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alergias</x-label>
                <x-input type="text" wire:model='createForm.alergias' id="createForm.alergias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.alergias" />
            </div>
            <div>
                <x-label for="createForm.banio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Baños Diarios</x-label>
                <x-input type="number" wire:model='createForm.banio' id="createForm.banio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.banio" />
            </div>
            <div>
                <x-label for="createForm.lavdientes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lavado de Deintes?</x-label>
                <x-input type="number" wire:model='createForm.lavdientes' id="createForm.lavdientes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.lavdientes" />
            </div>
            <div>
                <x-label for="createForm.tabaquismos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuma?</x-label>
                <select wire:model='createForm.tabaquismos' id="createForm.tabaquismos"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.tabaquismos" />
            </div>
            <div>
                <x-label for="createForm.alcoholismo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bebe?</x-label>
                <select wire:model='createForm.alcoholismo' id="createForm.alcoholismo"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.alcoholismo" />
            </div>
            <div>
                <x-label for="createForm.toxicomanias" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Toxicomanias?</x-label>
                <select wire:model='createForm.toxicomanias' id="createForm.toxicomanias"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.toxicomanias" />
            </div>
            <div>
                <x-label for="createForm.deportes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Practica algún deporte?</x-label>
                <x-input type="text" wire:model='createForm.deportes' id="createForm.deportes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.deportes" />
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
                <x-label for="createForm.peso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Peso</x-label>
                <x-input type="number" wire:model='createForm.peso' id="createForm.peso" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.peso" />
            </div>
            <div>
                <x-label for="createForm.talla" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Talla</x-label>
                <x-input type="number" wire:model='createForm.talla' id="createForm.talla" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.talla" />
            </div>
            <div>
                <x-label for="createForm.fc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FC</x-label>
                <x-input type="number" wire:model='createForm.fc' id="createForm.fc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.fc" />
            </div>
            <div>
                <x-label for="createForm.fr" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FR</x-label>
                <x-input type="number" wire:model='createForm.fr' id="createForm.fr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.fr" />
            </div>
            <div>
                <x-label for="createForm.temp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Temperatura</x-label>
                <x-input type="number" wire:model='createForm.temp' id="createForm.temp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.temp" />
            </div>
            <div>
                <x-label for="createForm.ca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CA</x-label>
                <x-input type="number" wire:model='createForm.ca' id="createForm.ca" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.ca" />
            </div>
            <div>
                <x-label for="createForm.so2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SO2</x-label>
                <x-input type="number" wire:model='createForm.so2' id="createForm.so2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.so2" />
            </div>
            <div>
                <x-label for="createForm.ta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TA</x-label>
                <x-input type="text" wire:model='createForm.ta' id="createForm.ta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.ta" />
            </div>
            <div>
                <x-label for="createForm.imc" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IMC</x-label>
                <x-input type="number" wire:model='createForm.imc' id="createForm.imc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.imc" />
            </div>
            <div>
                <x-label for="createForm.dxtx" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX-TX</x-label>
                <x-input type="number" wire:model='createForm.dxtx' id="createForm.dxtx" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                <x-input-error for="createForm.dxtx" />
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
                <x-label for="createForm.observacionesn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='createForm.observacionesn' id="createForm.observacionesn" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.observacionesn" />
            </div>
            <div>
                <x-label for="createForm.txn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='createForm.txn' id="createForm.txn" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.txn" />
            </div>
            <div>
                <x-label for="createForm.dxn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='createForm.dxn' id="createForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.dxn" />
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
                <x-label for="createForm.observacionesmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='createForm.observacionesmg' id="createForm.observacionesmg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.observacionesmg" />
            </div>
            <div>
                <x-label for="createForm.txmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='createForm.txmg' id="createForm.txmg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.txmg" />
            </div>
            <div>
                <x-label for="createForm.dxmg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='createForm.dxmg' id="createForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.dxmg" />
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
                <x-label for="createForm.observacionesft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='createForm.observacionesft' id="createForm.observacionesft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.observacionesft" />
            </div>
            <div>
                <x-label for="createForm.txft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='createForm.txft' id="createForm.txft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.txft" />
            </div>
            <div>
                <x-label for="createForm.dxft" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='createForm.dxft' id="createForm.dxft" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.dxft" />
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
                <x-label for="createForm.observacionesod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='createForm.observacionesod' id="createForm.observacionesod" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.observacionesod" />
            </div>
            <div>
                <x-label for="createForm.txod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TX</x-label>
                <textarea wire:model='createForm.txod' id="createForm.txod" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.txod" />
            </div>
            <div>
                <x-label for="createForm.dxod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DX</x-label>
                <textarea wire:model='createForm.dxod' id="createForm.dx" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.dxod" />
            </div>
        </div>
        <div class="grid grid-cols-4 gap-2 pl-6 sm:grid-cols-4">
            <div>
                <x-label for="createForm.permitiooracion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Permimtio oración?</x-label>
                <select wire:model='createForm.permitiooracion' id="createForm.permitiooracion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.permitiooracion" />
            </div>
            <div>
                <x-label for="createForm.interesoracion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mostro interes en visita o lista oracion?</x-label>
                <select wire:model='createForm.interesoracion' id="createForm.interesoracion"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.interesoracion" />
            </div>
            <div>
                <x-label for="createForm.espcialidadintesada" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Especialidad por la que mostro mayor interes?</x-label>
                <select wire:model='createForm.espcialidadintesada' id="createForm.espcialidadintesada"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="null" >Elija una opcion</option>
                    <option value="SI" >SI</option>
                    <option value="NO" >NO</option>
                </select>
                <x-input-error for="createForm.espcialidadintesada" />
            </div>
            <div>
                <x-label for="createForm.observaciones2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</x-label>
                <textarea wire:model='createForm.observaciones2' id="createForm.observaciones2" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                <x-input-error for="createForm.observaciones2" />
            </div>
        </div>
    </form>
</div>
