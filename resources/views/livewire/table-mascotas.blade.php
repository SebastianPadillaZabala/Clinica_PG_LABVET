<div>

    <body class="antialiased font-sans bg-gray-200">
        <div class="container p-3 mx-auto px-4 sm:px-8">
            <div class="py-6">
                <div class="pb-3">
                    <h2 class="text-2xl font-semibold leading-tight">Listado de Mascotas</h2>
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
                    focus:outline-none hover:bg-teal-600 hover:shadow-none py-2 px-7 pr-8 leading-tight focus:border-l focus:border-r focus:bg-teal-500 hover:text-black focus:border-gray-500">Añadir Mascota</button>
                    </div>
                </div>
                @if($mascotas->count())
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Edad
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Raza
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Especie
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Color
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Sexo
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mascotas as $m)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-5 h-5">
                                                <img class="w-full h-full rounded-full" src="/storage/img/can.png" alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$m->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-7 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$m->edad}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$m->raza}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$m->especie}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$m->color}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$m->sexo}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('mascotasAnalisis', [$m->id_masc])}}">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-orange-300 opacity-50 rounded-full"></span>
                                                <span class="relative">Historial</span>
                                            </span>
                                        </a>
                                        {{--<a href="#">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-indigo-700 opacity-50 rounded-full"></span>
                                                <span class="relative">Editar</span>
                                            </span>
                                        </a> --}}
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
                    <form action="{{route('registerM', [$id_pac])}}" method="POST">
                        @csrf
                        <h1 class="text-white font-lg font-bold tracking-normal text-center uppercase leading-tight mb-4">Registrar Mascota</h1>
                        <label for="name" class="text-white text-sm font-bold leading-tight tracking-normal">Nombre</label>
                        <input id="name" name="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Nombre mascota" />
                        <label for="edad" class="text-white text-sm font-bold leading-tight tracking-normal">Edad</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute text-gray-600 flex items-center border-r h-full">
                            </div>
                            <input id="edad" name="edad" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Edad" />
                        </div>
                        <label for="raza" class="text-white text-sm font-bold leading-tight tracking-normal">Raza</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute text-gray-600 flex items-center border-r h-full">
                            </div>
                            <input id="raza" name="raza" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Raza" />
                        </div>
                        <label for="especie" class="text-white text-sm font-bold leading-tight tracking-normal">Especie</label>
                        <div class="relative mb-5 mt-2">
                            <input id="especie" name="especie" type="text" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Especie" />
                        </div>
                        <label for="color" class="text-white text-sm font-bold leading-tight tracking-normal">Color</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                            </div>
                            <input id="color" name="color" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Color" />
                        </div>
                        <label for="sexo" class="text-white text-sm font-bold leading-tight tracking-normal">Sexo</label>
                        <div class="relative mb-5 mt-2">
                            <select name="select" class="w-full mb-4">
                                <option value="">Seleccione el sexo</option>
                                <option value="HEMBRA">Hembra</option>
                                <option value="MACHO">Macho</option>
                            </select>
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

    function mostrarModalEditarFigura() {
        modalEditarFigura.classList.remove('hidden')

    }

    function ocultarModalEditarFigura() {
        modalEditarFigura.classList.add('hidden')
    }
</script>