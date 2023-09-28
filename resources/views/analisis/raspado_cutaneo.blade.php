@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf">
  <img src="/storage/img/fondo3_r.jpg" class="hidden w-full h-full print:block absolute top-0" alt="">
  <div class="w-fit bg-white lg:w-full xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
    <header>
      <div class="flex flex-row mt-20 mb-2 ml-0 text-center font-bold md:text-xl lg:text-xl xl:text-xl print:text-xl lg:ml-12 xl:ml-12 justify-center">
        RASPADO CUT&Aacute;NEO
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
      <div id="content" class="flex flex-col items-center md:p-2 lg:p-2 xl:p-2 print:mt-3 print:gap-2">
        <h1 class="text-l font-bold">MICROSCOPIA DIRECTA (NaCl 0.9% y KOH)</h1>
        <textarea name="" id="" cols="100" rows="7" placeholder="ESCRIBA AQUI......." class="w-full overflow-hidden text-sm"></textarea>
        <h1 class="text-l font-bold">CULTIVO</h1>
        <table class="w-full text-left text-sm border-l border-r table-auto print:text-sm" id="table-items">
          <tbody>
            <tr>
              <td class="px-2 py-1 border font-bold w-1/3">TINCI&Oacute;N DE GRAM:</td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full">
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 border font-bold">RECUENTO DE COLONIAS:</td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full">
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 border font-bold">DIAGNOSTICO MICROBIOL&Oacute;GICO:</td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full">
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </content>
    <div class="flex flex-col items-center md:p-2 lg:p-1 xl:p-1 print:mt-0 print:gap-1">
      <h1 class="text-l font-bold">ANTIBIOGRAMA</h1>
      <table class="w-full text-left text-sm border-t border-b border-l border-r table-auto print:text-sm">
        <thead>
          <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
            <th class="px-4 py-2 text-center">SENSIBLE</th>
            <th class="px-4 py-2 text-center">INTERMEDIO</th>
            <th class="px-4 py-2 text-center">RESISTENTE</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
          <tr>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
            <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
        </tbody>
      </table>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="window.print()">Imprimir</button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="mostrarModalImportar()">Guardar</button>
      <img src="/storage/img/firma3.jpeg" class="w-64 print:mt-2 text-center print:text-lg" />
    </div>
  </div>
  <img src="/storage/img/fondo.png" class="hidden print:block w-full h-full opacity-20 absolute bottom-24 pr-9" alt="">
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
        <input id="name" name="name" value="Raspado Cutaneo" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
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