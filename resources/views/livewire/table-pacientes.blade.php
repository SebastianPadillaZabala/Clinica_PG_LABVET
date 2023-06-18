<div>
    <body class="antialiased font-sans bg-gray-200">
        <div class="container p-3 mx-auto px-4 sm:px-8">
            <div class="py-6">
                <div class="pb-3">
                    <h2 class="text-2xl font-semibold leading-tight">Listado de Pacientes</h2>
                </div>
                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="block relative">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                        <input type="text" placeholder="Escriba aqui.." wire:model="search" class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                    <div class="relative">
                        <button type="button" onclick="mostrarModalEditarFigura()" class="h-full rounded-l border-t sm:rounded-l-none sm:border-l-0 border-l border-b block appearance-none w-full bg-teal-500 rounded-md 
                    font-medium text-white
                    focus:outline-none hover:bg-teal-600 hover:shadow-none py-2 px-7 pr-8 leading-tight focus:border-l focus:border-r focus:bg-teal-600 hover:text-black focus:border-gray-500">Añadir Paciente</button>
                    </div>
                </div>
                @if($pacientes->count())
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Carnet de Identidad
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Celular
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Fecha Nacimiento
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Direcci&oacute;n
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pacientes as $p)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-8 h-8">
                                                <img class="w-full h-full rounded-full" src="/storage/img/user.png" alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$p->namePac}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$p->ci}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$p->celular}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$p->fecha_nac}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$p->direccion}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('mascotas', [$p->id_pac])}}">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative">Mascotas</span>
                                            </span>
                                        </a>
                                        {{-- <a href="{{route('pacientesH', [$p->id_pac])}}">
                                        <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                            <span aria-hidden class="absolute inset-0 bg-orange-300 opacity-50 rounded-full"></span>
                                            <span class="relative">Historial</span>
                                        </span>
                                        </a> --}}
                                        <a href="{{route('editar_Paciente', [$p->id_pac])}}">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-indigo-700 opacity-50 rounded-full"></span>
                                                <span class="relative">Editar</span>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @else
                <div class="px-6 py-4 mt-10 bg-red-600 text-white border rounded-md">
                    No existe ningun registro coincidente.
                </div>
                @endif
            </div>
        </div>
        <div class="modaleditarfigura py-12 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0 hidden" id="modal">
            <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                <div class="relative py-8 px-5 md:px-10 bg-teal-500 shadow-md rounded border border-gray-400">
                    <form action="{{route('registerP')}}" method="POST">
                        @csrf
                        <h1 class="text-white font-lg font-bold tracking-normal text-center uppercase leading-tight mb-4">Registrar Paciente</h1>
                        <label for="name" class="text-white text-sm font-bold leading-tight tracking-normal">Nombre</label>
                        <input id="name" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nombre" />
                        <label for="celular" class="text-white text-sm font-bold leading-tight tracking-normal">Celular</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute text-gray-600 flex items-center border-r h-full">
                            </div>
                            <input id="celular" name="celular" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Celular" />
                        </div>
                        <label for="ci" class="text-white text-sm font-bold leading-tight tracking-normal">Carnet de Identidad</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute text-gray-600 flex items-center border-r h-full">
                            </div>
                            <input id="ci" name="ci" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Carnet de identidad" />
                        </div>
                        <label for="fecha_nac" class="text-white text-sm font-bold leading-tight tracking-normal">Fecha de Nacimiento</label>
                        <div class="relative mb-5 mt-2">
                            <input id="fecha_nac" name="fecha_nac" type="date" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                        </div>
                        <label for="direccion" class="text-white text-sm font-bold leading-tight tracking-normal">Direccion / Domicilio</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                            </div>
                            <input id="direccion" name="direccion" class="mb-8 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Direccion" />
                        </div>

                        <div class="flex items-center justify-center w-full">
                            <button type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700 transition duration-150 ease-in-out hover:bg-gray-600 bg-gray-700 rounded text-white px-8 py-2 text-sm" onclick="ocultarModalEditarFigura()">Confirmar</button>
                        </div>
                    </form>
                    <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-white hover:text-black transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="ocultarModalEditarFigura()" aria-label="close modal" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </body>
</div>
<script>
    const modalEditarFigura = document.querySelector('.modaleditarfigura')
    const campoParaCambiarNombre = document.getElementById('campoparacambiarnombre')
    const campoParaCambiarDescripcion = document.getElementById('campoparacambiardescripcion')

    function mostrarModalEditarFigura() {
        modalEditarFigura.classList.remove('hidden')
        campoParaCambiarNombre.value = elementoParaEditar.getNombre
        campoParaCambiarDescripcion.value = elementoParaEditar.getDescripcion

    }

    function ocultarModalEditarFigura() {
        modalEditarFigura.classList.add('hidden')
    }
</script>