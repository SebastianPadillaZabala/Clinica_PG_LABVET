@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf">
  <div class="w-full bg-white lg:w-full xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
    <header class="flex flex-col items-center rounded-md px-8 pt-5 text-lg text-center bg-white border-t-8 border-blue-800 md:block lg:block xl:block print:block md:items-start lg:items-start xl:items-start print:items-start md:text-left lg:text-left xl:text-left print:text-left print:pt-3 print:px-1 md:relative lg:relative xl:relative print:relative">
      <img class="w-3/6 h-auto md:w-1/4 lg:ml-12 xl:ml-12 print:w-3/6 print:py-0" src="/storage/img/logo.jpeg" />
      <div class="flex flex-row mt-5 mb-2 ml-0 text-2xl text-center font-bold md:text-3xl lg:text-4xl xl:text-4xl print:text-2xl lg:ml-12 xl:ml-12 justify-center">BIOMETRIA HEMATICA
      </div>
      <div class="flex flex-col lg:ml-12 xl:ml-12 print:text-sm">
        <span class="font-bold pr-3">PROPIETARIO:
          <span class="font-normal uppercase">{{$propietario[0]->namePac}}</span>
        </span>
        <span class="font-bold pr-3">SOLICITADO POR:
          <input class="font-normal uppercase" type="text">
        </span>
        <span class="font-bold pr-3">FECHA:
          <input class="font-normal" type="date">
        </span>
      </div>
      <contract class="flex flex-col m-12 text-start lg:m-12 md:flex-none md:text-left md:relative md:m-0 md:mt-16 lg:flex-none lg:text-left lg:relative xl:flex-none xl:text-left xl:relative print:flex-none print:text-left print:relative print:m-0 print:mt-3 print:text-sm">
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
      <div id="content" class="flex justify-center md:p-8 lg:p-2 xl:p-2 print:mt-3 print:p-2">
        <table class="w-full text-left border-t border-b border-l border-r table-auto print:text-sm" id="table-items">
          <thead>
            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
              <th class="px-4 py-2">DETERMINACION</th>
              <th class="px-4 py-2 text-center">RESULTADO</th>
              <th class="px-4 py-2 text-center">UNIDAD</th>
              <th class="px-4 py-2 text-center">RANGOS REFERENCIALES</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border font-bold">Globulos rojos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">/mm3</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">4.500.000 - 10.500.000/mm3</td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">Hemoglobina</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">g%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">8.5 - 15 g%</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border font-bold">
                Hematocrito
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">26 - 48 %</td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">
                V.C.M
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">fL</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">38 - 54 fL</td>
            </tr>
            <tr class="bg-white print:bg-white">
              <td class="px-4 py-2 border font-bold">
                Hb.C.M
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center print:bg-white">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">pg</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">11 - 18 pg</td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">
                C.Hb.C.M
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">fL</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">38 - 54 fL</td>
            </tr>
            <tr class="text-black font-bold print:bg-white print:text-black">
              <td class="invisible"></td>
              <td class="px-4 py-2 text-right">EL</td>
              <td class="px-4 py-2 text-left">DIFERENCIAL</td>
              <td class="invisible"></td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">Cayados</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">0 - 3 %</td>
            </tr>
            <tr class="bg-white print:bg-white">
              <td class="px-4 py-2 border font-bold">Neutrofilos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">60 - 77 %</td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">Eosinofilos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">1 - 6 %</td>
            </tr>
            <tr class="bg-white print:bg-white">
              <td class="px-4 py-2 border font-bold">Basofilos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">0 - 1 %</td>
            </tr>
            <tr class="bg-gray-100 print:bg-white">
              <td class="px-4 py-2 border font-bold">Linfocitos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">12 - 30 %</td>
            </tr>
            <tr class="bg-white print:bg-white">
              <td class="px-4 py-2 border font-bold">Monocitos</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center">
              </td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">%</td>
              <td class="px-4 py-2 text-center border tabular-nums slashed-zero">3 - 8 %</td>
            </tr>
          </tbody>
        </table>
      </div>
    </content>
    <br>
    <div class="flex flex-col items-center mb-24 leading-relaxed print:mt-0 print:mb-5">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="window.print()">Imprimir</button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="mostrarModalImportar()">Guardar</button>
      <img src="/storage/img/firma.jpeg" class="w-64 text-4xl text-center print:text-lg print:mt-5" />
    </div>
    <br>
    <footer class="flex items-center rounded-md justify-center pb-10 text-white bg-blue-800 print:text-white print:mt-10 print:pb-0">
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
        <input id="name" name="name" value="Biometria Hematica" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
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
@endsection