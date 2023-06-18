@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf">
  <div class="w-full bg-white lg:w-full xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
    <header class="flex flex-col items-center rounded-md px-8 pt-5 text-lg text-center bg-white border-t-8 border-blue-800 md:block lg:block xl:block print:block md:items-start lg:items-start xl:items-start print:items-start md:text-left lg:text-left xl:text-left print:text-left print:pt-3 print:px-1 md:relative lg:relative xl:relative print:relative">
      <img class="w-3/6 h-auto md:w-1/4 lg:ml-12 xl:ml-12 print:w-3/6 print:py-0" src="/storage/img/logo.jpeg" />
      <div class="flex flex-row mt-5 mb-2 ml-0 text-2xl text-center font-bold md:text-3xl lg:text-4xl xl:text-4xl print:text-2xl lg:ml-12 xl:ml-12 justify-center">
        INMUNOLOGIA
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
    <br>
    <div class="flex flex-col items-center mb-10 leading-relaxed print:mt-48 print:mb-2">
        <h1 class="text-xl font-bold">SEROLOGIA</h1>
        <p class="text-sm print:text-xs">PRUEBA R&Aacute;PIDA CON T&Eacute;CNICA DE INMUNOCROMATOGR&Aacute;FIA DETECCI&Oacute;N DE</p>
        <p class="text-sm print:text-xs">PAT&Oacute;GENO ANT&Iacute;GENO</p>
      <table class="w-2/3 text-center mt-3 border-t border-b border-l border-r table-auto print:text-sm print:mt-3" id="table-items">
        <tbody>
          <tr>
            <td class="px-4 py-2 border font-bold">CDV Ag (moquillo canino)</td>
            <td class="px-4 py-2 text-center border tabular-nums slashed-zero">
              <input type="text" class="text-center w-full">
            </td>
          </tr>
        </tbody>
      </table>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded print:hidden mt-3" onclick="window.print()">Imprimir</button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded print:hidden mt-3" onclick="mostrarModalImportar()">Guardar</button>
      <img src="/storage/img/firma2.jpeg" class="w-64 print:mt-72 text-center print:text-lg" />
    </div>
    <br>
    <footer class="flex items-center rounded-md justify-center pb-10 text-white bg-blue-800 print:text-white print:mt-14 print:pb-0">
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
        <input id="name" name="name" value="Inmunologia" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
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