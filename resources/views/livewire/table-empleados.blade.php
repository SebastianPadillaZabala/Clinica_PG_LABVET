<div>

    <body class="antialiased font-sans bg-gray-200">
        <div class="container p-3 mx-auto px-4 sm:px-8">
            <div class="py-6">
                <div class="pb-3">
                    <h2 class="text-2xl font-semibold leading-tight">Listado de Usuarios</h2>
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
                        <a href="{{route('registerU')}}">
                            <button type="button" class="h-full rounded-l border-t sm:rounded-l-none sm:border-l-0 border-l border-b block appearance-none w-full bg-teal-500 rounded-md 
                    font-medium text-white 
                    focus:outline-none hover:bg-teal-600 hover:shadow-none py-2 px-7 pr-8 leading-tight focus:border-l focus:border-r focus:bg-teal-500 hover:text-black focus:border-gray-500">Añadir Usuario</button>
                        </a>
                    </div>
                </div>

                @if($users->count())
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Nombre
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Rol
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Celular
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-teal-500 text-left text-xs font-semibold text-white uppercase tracking-wider">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $u)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-8 h-8">
                                                <img class="w-full h-full rounded-full" src="/storage/img/user.png" alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$u->name}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">{{$u->role}}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$u->celular}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{$u->email}}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <a href="{{route('editar_Empleado', [$u->id])}}">
                                            <span class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                                                <span aria-hidden class="absolute inset-0 bg-indigo-700 opacity-50 rounded-full"></span>
                                                <span class="relative">Editar</span>
                                            </span>
                                        </a>
                                        <div class="relative inline-block font-semibold text-whie leading-tight">
                                            <form aria-hidden action="{{route('user.destroy', [$u->id])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-3 py-1 inset-0 bg-red-500 rounded-full block appearance-none w-full
                                                  text-white focus:outline-none hover:bg-red-600 hover:shadow-none focus:border-l focus:border-r focus:bg-red-600
                                                 hover:text-black focus:border-gray-500">Eliminar</button>
                                            </form>
                                        </div>
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
    </body>
</div>