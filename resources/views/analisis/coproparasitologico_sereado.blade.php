@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf print:scale-90">
    <div class="w-full bg-transparent lg:w-full xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
        <header class="flex flex-col items-center rounded-md px-8 pt-1 text-lg text-center bg-white border-t-8 border-blue-800 md:block lg:block xl:block print:block md:items-start lg:items-start xl:items-start print:items-start md:text-left lg:text-left xl:text-left print:text-left print:pt-0 print:pb-0 print:px-2 md:relative lg:relative xl:relative print:relative">
            <img class="w-3/6 h-auto md:w-1/4 lg:ml-12 xl:ml-12 print:w-3/6 print:py-0 print:mt-1 print:mb-1" src="/storage/img/logo2.jpeg" />
            <div class="flex flex-row mt-2 mb-2 ml-0 text-xl text-center font-bold md:text-xl lg:text-xl xl:text-xl print:text-xl lg:ml-12 xl:ml-12 justify-center print:mb-10 print:mt-5">
                COPROPARASITOLOGICO SEREADO
            </div>
            <div class="flex flex-col text-sm lg:ml-5 xl:ml-5 print:text-sm">
                <span class="font-bold pr-3">PROPIETARIO:
                    <span class="font-normal uppercase">{{$propietario[0]->namePac}}</span>
                </span>
                <span class="font-bold pr-3">SOLICITADO POR:
                    <input class="font-normal uppercase" type="text">
                </span>
                <span class="font-bold pr-3">FECHA:
                    <input class="font-normal" type="date" value="{{ now()->format('Y-m-d') }}">
                </span>
            </div>
            <contract class="flex flex-col text-sm text-start lg:m-5 md:flex-none md:text-left md:relative md:m-0 md:mt-5 lg:flex-none lg:text-left lg:relative xl:flex-none print:text-left print:m-0 print:mt-0 print:text-sm">
                <from class="flex flex-row">
                    <span class="font-bold pr-3">PACIENTE:
                        <span class="font-normal"> {{$mascota->name}}</span>
                    </span>
                    <span class="font-bold pr-3">ESPECIE:
                        <span class="font-normal"> {{$mascota->especie}}</span>
                    </span>
                    <span class="font-bold pr-3">RAZA:
                        <span class="font-normal"> {{$mascota->raza}}</span>
                    </span>
                    <span class="font-bold pr-3">EDAD:
                        <span class="font-normal"> {{$mascota->edad}}</span>
                    </span>
                    <span class="font-bold pr-3">COLOR:
                        <span class="font-normal"> {{$mascota->color}}</span>
                    </span>
                    <span class="font-bold pr-3">SEXO:
                        <span class="font-normal"> {{$mascota->sexo}}</span>
                    </span>
                </from>
            </contract>
        </header>
        <content>
            <div id="content" class="flex justify-center lg:p-2 xl:p-2 print:mt-28 print:p-1">
                <table class="w-full text-left text-sm border-t border-b border-l border-r table-auto print:text-sm" id="table-items">
                    <thead>
                        <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
                            <th class="px-2 py-1">EXAMEN MACROSCOPICO</th>
                            <th class="px-2 py-1 text-center"></th>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-2 py-1 border font-bold">COLOR</td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <input type="text" class="text-start w-full">
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100 print:bg-white">
                            <td class="px-2 py-1 border font-bold">CONSISTENCIA</td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <input type="text" class="text-start w-full">
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1 border font-bold">
                                RESTOS ALIMENTICIOS
                            </td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <textarea name="" id="" cols="80" rows="1"></textarea>
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="text-white bg-gray-700 font-bold print:bg-gray-300 print:text-black">
                            <td class="px-2 py-1 text-left">EXAMEN MICROSCOPICO</td>
                            <th class="px-2 py-1 text-center"></th>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100 print:bg-white">
                            <td class="px-2 py-1 border font-bold">LEVADURAS</td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <input type="text" class="text-start w-full">
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="bg-white print:bg-white">
                            <td class="px-2 py-1 border font-bold">PARASITOS 1ra MUESTRA</td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <textarea name="" id="" cols="80" rows="2"></textarea>
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="bg-white print:bg-white">
                            <td class="px-2 py-1 border font-bold">PARASITOS 1da MUESTRA</td>
                            <td class="px-2 py-1 text-start border tabular-nums slashed-zero">
                                <textarea name="" id="" cols="80" rows="2"></textarea>
                            </td>
                            <td class="px-2 py-1 text-center print:hidden">
                                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </content>
        <div class="flex flex-col items-center mb-10 leading-relaxed print:mt-24 print:mb-10">
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" id="agregarFila">Agregar Fila</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="window.print()">Imprimir</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="mostrarModalImportar()">Guardar</button>
            <img src="/storage/img/firma2.jpeg" class="print:m-2.5 w-64 text-center" />
        </div>
        <footer class="flex items-center rounded-md justify-center pb-10 text-white bg-blue-800 print:text-white print:mt-40 print:pb-0">
            <div class="grid grid-cols-3 gap-8 sm:gap-20 sm:grid-cols-3 md:flex md:justify-between print:gap-20 print:flex print:justify-between">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-2">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>

                    <ul class="text-white">
                        <li class="mb-1">
                            <a class="text-xs">Calle 5 Numero 112 Zona Los Pinos</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-2">
                        <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                        <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 
            6.908z" />
                    </svg>

                    <ul class="text-white font-medium">
                        <li class="mb-1">
                            <a class="text-xs">pglaboratoriobiologicoclinico@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mt-2">
                        <path d="M10.5 18.75a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" />
                        <path fill-rule="evenodd" d="M8.625.75A3.375 3.375 0 005.25 4.125v15.75a3.375 3.375 0 003.375 
            3.375h6.75a3.375 3.375 0 003.375-3.375V4.125A3.375 3.375 0 0015.375.75h-6.75zM7.5 4.125C7.5 3.504
             8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621
              0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 017.5 19.875V4.125z" clip-rule="evenodd" />
                    </svg>

                    <ul class="text-white font-medium">
                        <li class="mb-1">
                            <a class="text-xs">75091961</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <img src="/storage/img/fondo.png" class="hidden print:block opacity-20 absolute top-0 right-0" alt="">
</body>
<!-- modal Importar -->
<div class="modalImportar h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-orange bg-opacity-50 hidden">
    <!-- modal -->
    <div class="bg-teal-600 rounded shadow-lg w-10/12 md:w-1/3">
        <!-- modal header -->
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-white text-lg">Guardar documento en el sistema</h3>
            <button onclick="ocultarModalImportar()" class="text-white close-modal">X</button>
        </div>
        <!-- modal body -->
        <div class="p-3 text-white">
            <form action="{{route('saveAnalisisM', [$id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="text-white text-sm font-bold leading-tight tracking-normal">Nombre</label>
                <input id="name" name="name" value="Coproparasitologico Sereado" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                <label for="fecha" class="text-white text-sm font-bold leading-tight tracking-normal">Fecha</label>
                <input id="fecha" name="fecha" type="date" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Fecha" />
                <input name="file" type="file" id="file">
        </div>
        <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Save</button>
        </div>
        </form>
    </div>
</div>
<script>
    const modalImportar = document.querySelector('.modalImportar')

    function mostrarModalImportar() {
        modalImportar.classList.remove('hidden')
    }

    function ocultarModalImportar() {
        modalImportar.classList.add('hidden')
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const agregarFilaBtn = document.getElementById("agregarFila");
        const table = document.getElementById("table-items").getElementsByTagName("tbody")[0];

        agregarFilaBtn.addEventListener("click", function() {
            const newRow = table.insertRow(-1);

            // Agregar celdas a la nueva fila
            const cell1 = newRow.insertCell(0);
            const cell2 = newRow.insertCell(1);
            const cell3 = newRow.insertCell(2);

            cell1.innerHTML = '<input type="text" class="px-2 py-1 w-full border font-bold">';
            cell2.innerHTML = '<input type="text" class="px-2 py-1 border w-full tabular-nums slashed-zero">';
            cell3.innerHTML = '<button class="px-2 py-1 bg-red-500 ml-5 borde text-white print:hidden" onclick="eliminarFila(this)">Eliminar</button>';
        });
    });

    function eliminarFila(button) {
        const row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
@endsection