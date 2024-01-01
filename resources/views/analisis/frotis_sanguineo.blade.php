@extends('formato')
@section('content')

<body class="bg-gray-200 print:bg-white pt-5 md:flex lg:flex xl:flex print: md:justify-center lg:justify-center xl:justify-center print:justify-center sf">
    <img src="/storage/img/fondo3_r.jpg" class="hidden w-full h-full print:block absolute top-0" alt="">
    <div class="w-fit bg-white lg:w-fit xl:w-2/3 lg:mt-5 lg:mb-20 lg:shadow-xl xl:mt-2 xl:mb-20 xl:shadow-xl print:transform print:mr-20 print:scale-90">
        <header>
            <div class="flex flex-row mt-20 mb-2 ml-0 text-center font-bold md:text-xl lg:text-xl xl:text-xl print:text-xl lg:ml-12 xl:ml-12 justify-center">
                FROTIS SANGUINEO
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
            <div id="content" class="flex flex-col justify-center md:p-8 lg:p-2 xl:p-2 print:mt-5 print:justify-center print:p-1">
                <div class="flex flex-col items-start gap-1 mb-5 m-8 leading-relaxed print:mt-1 print:mb-20 print:text-sm print:m-0">
                    <div class="section-container">
                        <div class="flex items-center justify-between">
                            <input type="text" class="w-full text-sm font-bold" value="Serie blanca">
                            <button class="text-red-500 hover:text-red-700 delete-button print:hidden">Eliminar</button>
                        </div>
                        <textarea rows="1" cols="110"></textarea>
                    </div>
                    <div class="section-container">
                        <div class="flex items-center justify-between">
                            <input type="text" class="w-full text-sm font-bold" value="Serie roja">
                            <button class="text-red-500 hover:text-red-700  delete-button print:hidden">Eliminar</button>
                        </div>
                        <textarea rows="1" cols="110"></textarea>
                    </div>
                    <div class="section-container">
                        <div class="flex items-center justify-between">
                            <input type="text" class="w-full text-sm font-bold" value="Plaquetas">
                            <button class="text-red-500 hover:text-red-700 delete-button print:hidden">Eliminar</button>
                        </div>
                        <textarea rows="1" cols="110"></textarea>
                    </div>
                    <div class="section-container">
                        <div class="flex items-center justify-between">
                            <input type="text" class="w-full text-sm font-bold" value="Evaluaci&oacute;n citol&oacute;gica">
                            <button class="text-red-500 hover:text-red-700 delete-button print:hidden">Eliminar</button>
                        </div>
                        <textarea rows="2" cols="110"></textarea>
                    </div>
                </div>
                <div class="flex flex-row justify-center items-center m-5 mb-10 leading-relaxed print:mt-1 print:mb-2">
                    <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="print:hidden" onchange="previewImage(event)">
                        <img id="preview" src="#" alt="Previsualización de imagen" style="display:none;width:500px;height:200px;">
                    </form>
                    <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" class="print:hidden" onchange="previewImage2(event)">
                        <img id="preview2" src="#" alt="Previsualización de imagen" style="display:none;width:500px;height:200px;">
                    </form>
                </div>
            </div>
        </content>
        <br>
        <div class="flex flex-col items-center mb-24 leading-relaxed print:mt-0 print:mb-5">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="window.print()">Imprimir</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3 print:hidden" onclick="mostrarModalGuardar()">Guardar</button>
            <img src="/storage/img/firma3.jpeg" class="w-64 text-4xl text-center print:text-lg" />
        </div>
        <br>
    </div>
    </div>
    <img src="/storage/img/fondo.png" class="hidden print:block w-full h-full opacity-20 absolute bottom-24 pr-9" alt="">
</body>
<!-- modal Importar -->
<div class="modalGuardar h-screen w-full fixed left-0 top-0 flex justify-center items-center bg-orange bg-opacity-50 hidden">
    <!-- modal -->
    <div class="bg-teal-600 rounded shadow-lg w-10/12 md:w-1/3">
        <!-- modal header -->
        <div class="border-b px-4 py-2 flex justify-between items-center">
            <h3 class="font-semibold text-white text-lg">Guardar documento en el sistema</h3>
            <button onclick="ocultarModalGuardar()" class="text-white close-modal">X</button>
        </div>
        <!-- modal body -->
        <div class="p-3 text-white">
            <form action="{{route('saveAnalisisM', [$id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="text-white text-sm font-bold leading-tight tracking-normal">Nombre</label>
                <input id="name" name="name" value="Frotis Sanguineo" class="mb-5 mt-2 text-black focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" />
                <label for="fecha" class="text-white text-sm font-bold leading-tight tracking-normal">Fecha</label>
                <input id="fecha" name="fecha" type="date" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-white font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Fecha" />
                <input name="file" type="file" id="file">
        </div>
        <div class="flex justify-end items-center w-100 border-t p-3">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">Guardar</button>
        </div>
        </form>
    </div>
</div>
<script>
    const modalGuardar = document.querySelector('.modalGuardar')

    function mostrarModalGuardar() {
        modalGuardar.classList.remove('hidden')
    }

    function ocultarModalGuardar() {
        modalGuardar.classList.add('hidden')
    }

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function previewImage2(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview2');
            preview.src = reader.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script>
    const deleteButtons = document.querySelectorAll(".delete-button");

    deleteButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const sectionContainer = button.closest(".section-container");
            sectionContainer.remove();
        });
    });
</script>
@endsection