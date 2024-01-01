@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf">
  <img src="/storage/img/fondo3_r.jpg" class="hidden w-full h-full print:block absolute top-0" alt="">
  <div class="w-fit bg-white lg:w-full xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:scale-90">
    <header>
      <div class="flex flex-row mt-20 mb-2 ml-0 text-center font-bold md:text-xl lg:text-xl xl:text-xl print:text-xl lg:ml-12 xl:ml-12 justify-center">
        QUIMICA SANGUINEA
      </div>
      <div class="flex flex-col text-sm lg:ml-5 xl:ml-5 print:text-sm">
        <span class="font-bold pr-3">PROPIETARIO:
          <span class="font-normal uppercase">{{$propietario[0]->namePac}}</span>
        </span>
        <span class="font-bold pr-3">SOLICITADO POR:
          <input class="w-64 font-normal uppercase" type="text">
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
      <div id="content" class="flex justify-center md:p-8 lg:p-2 xl:p-2 print:mt-32 print:p-2">
        <table class="w-full text-left text-sm border-l table-auto print:text-xs" id="table-items">
          <thead>
            <tr class="text-white bg-gray-700 print:bg-gray-300 print:text-black">
              <th class="px-2 py-1">ANALISIS</th>
              <th class="px-2 py-1 text-center">RESULTADO</th>
              <th class="px-2 py-1 text-center">RANGOS DE REFERENCIA</th>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="GLICEMIA">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="70 - 140 mg/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="CREATININA">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="0.5 - 1.8 mg/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="UREA">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="20 - 65 mg/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="NITROGENO UREICO">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="9 - 30 mg/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="TRANSAMINASA G.O.T.(AST)">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center print:bg-white">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="10 - 110 U/L">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="TRANSAMINASA G.P.T.(ALT)">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="10 - 100 U/L">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="FOSFATASA ALCALINA">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="68 - 240 U/L">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="ALBUMINA">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="2.3 - 3.4 g/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td class="px-2 py-1 text-center font-bold border tabular-nums slashed-zero">
                <input type="text" class="w-full" value="PROTEINAS TOTALES">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="w-full text-center">
              </td>
              <td class="px-2 py-1 text-center border tabular-nums slashed-zero">
                <input type="text" class="text-center w-full" value="5.7 - 8.0 g/dL">
              </td>
              <td class="px-2 py-1 text-center border print:hidden">
                <button class="px-2 py-1 bg-red-500 text-white" onclick="eliminarFila(this)">Eliminar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </content>
    <br>
    <div class="flex flex-col items-center mb-24 leading-relaxed print:mt-0 print:mb-5">
      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" id="agregarFila">Agregar Fila</button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="window.print()">Imprimir</button>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="mostrarModalImportar()">Guardar</button>
      <img src="/storage/img/firma3.jpeg" class="w-64 text-4xl text-center print:text-lg print:mt-14" />
    </div>
  </div>
  <img src="/storage/img/fondo.png" class="hidden print:block w-full h-full opacity-20 absolute bottom-24 pr-9" alt="">
</body>
<!-- modal Importar -->
<div class="modalImportar h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-orange bg-opacity-50 hidden">
  <!-- modal -->
  <div class="bg-teal-600 rounded shadow-lg w-10/12 md:w-1/3">
    <!-- modal header -->
    <div class="border-b px-2 py-1 flex justify-between items-center">
      <h3 class="font-semibold text-white text-lg">Guardar documento en el sistema</h3>
      <button onclick="ocultarModalImportar()" class="text-white close-modal">X</button>
    </div>
    <!-- modal body -->
    <div class="p-3 text-white">
      <form action="{{route('saveAnalisisM', [$id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name" class="text-white text-sm font-bold leading-tight tracking-normal">Nombre</label>
        <input id="name" name="name" value="Quimica Sanguinea Fel" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
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
      const cell4 = newRow.insertCell(3);

      cell1.className = "px-2 py-1 border font-bold";
      cell2.className = "px-2 py-1 text-center border tabular-nums slashed-zero";
      cell3.className = "px-2 py-1 text-center border tabular-nums slashed-zero";
      cell4.className = "px-2 py-1 text-center border print:hidden";

      cell1.innerHTML = '<input type="text" class="w-full">'; // Cambia este contenido según sea necesario
      cell2.innerHTML = '<input type="text" class="w-full text-center">';
      cell3.innerHTML = '<input type="text" class="w-full text-center">'; // Cambia este contenido según sea necesario
      cell4.innerHTML = '<button class="px-2 py-1 bg-red-500 text-white print:hidden" onclick="eliminarFila(this)">Eliminar</button>';
    });
  });

  function eliminarFila(button) {
    const row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }
</script>
@endsection