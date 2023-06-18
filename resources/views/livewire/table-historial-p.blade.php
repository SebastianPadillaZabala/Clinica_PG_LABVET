<div>
    <body class="antialiased font-sans bg-gray-200">
        <div class="container p-3 mx-auto px-4 sm:px-8">
            <div class="py-6">
                <div class="pb-3">
                    <h2 class="text-2xl font-semibold leading-tight">Los Analisis de {{$name}}</h2>
                </div>
                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="block relative">
                        <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                            <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                <path d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                </path>
                            </svg>
                        </span>
                        <input type="text" placeholder="Escriba aqui.." wire:model="search" class="appearance-none rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                    </div>
                    <div class="relative">
                            <div class="group inline-block ml-auto">
                                <button class="rounded-md outline-none focus:outline-none border px-3 py-1 text-white  bg-teal-500 hover:bg-teal-600 focus:bg-teal-500 hover:text-black focus:border-gray-500 flex items-center min-w-32">
                                    <span class="pr-1 font-semibold flex-1">Nuevo Analisis</span>
                                    <span>
                                        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </button>
                                <ul class="bg-white border text-center rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-400 ease-in-out origin-top min-w-full">
                                    <li class="rounded-sm px-3 py-1 font-bold hover:bg-gray-300"><a href="{{route('hematica',[$id])}}">Hematica</a></li>
                                    <li class="rounded-sm px-3 py-1 font-bold hover:bg-gray-300"><a href="">tipo 2</a></li>
                                </ul>
                            </div>
                        <style>
                            li>ul {
                                transform: translatex(100%) scale(0)
                            }

                            li:hover>ul {
                                transform: translatex(101%) scale(1)
                            }

                            li>button svg {
                                transform: rotate(-90deg)
                            }

                            li:hover>button svg {
                                transform: rotate(-270deg)
                            }

                            .group:hover .group-hover\:scale-100 {
                                transform: scale(1)
                            }

                            .group:hover .group-hover\:-rotate-180 {
                                transform: rotate(180deg)
                            }

                            .scale-0 {
                                transform: scale(0)
                            }

                            .min-w-32 {
                                min-width: 8rem
                            }
                        </style>
                    </div>
                </div>

                @if($analisis->count())
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Url
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Fecha de Analisis
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($analisis as $a)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="ml-1">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$a->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$a->url}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$a->fecha}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="/storage/pacientes/{{$a->id_paciente}}/{{$a->url}}" target="_blank">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-indigo-700 opacity-50 rounded-full"></span>
                                                <span class="relative">Ver</span>
                                            </span>
                                        </a>
                                        <a href="">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-red-600 opacity-50 rounded-full"></span>
                                                <span class="relative">Eliminar</span>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Showing 1 to 4 of 50 Entries
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                <button class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="px-6 py-4 mt-10 bg-red-600 text-white border rounded-md">
                    No existe ningun registro coincidente.
                </div>
                @endif
            </div>
        </div>
    </body>
</div>