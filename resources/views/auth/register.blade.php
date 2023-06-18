@extends('formato')
@section('content')
<div class="flex flex-col h-screen bg-gray-800">
    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">

            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Registrar Usuario
            </h2>

            <form class="mt-10" method="POST" action="{{ route('registerPost') }}">
                @csrf
                <!-- Name Input -->
                <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Nombre</label>
                <input id="name" type="text" name="name" placeholder="Nombre" autocomplete="nombre" class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required />

                <!-- Celular Input -->
                <label for="celular" class="block text-xs font-semibold mt-2 text-gray-600 uppercase">Celular</label>
                <input id="celular" type="phonenumber" name="celular" placeholder="Celular" autocomplete="celular" class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required />

                <!-- CI Input -->
                <label for="CI" class="block text-xs font-semibold mt-2 text-gray-600 uppercase">Carnet de Identidad</label>
                <input id="CI" type="text" name="CI" placeholder="Carnet de Identidad" autocomplete="CI" class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required />

                <!-- Email Input -->
                <label for="email" class="block text-xs font-semibold mt-2 text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="E-mail address" autocomplete="email" class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required />

                <!-- Password Input -->
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Contraseña</label>
                <input id="password" type="password" name="password" placeholder="Password" autocomplete="current-password" class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required />

                <!-- Role -->
                <div class="input-group">
                    <label for="role" class="block text-xs mb-1 text-gray-600 font-semibold uppercase">Rol</label>
                    <select name="select" class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200" required>
                        <option value="">Seleccione un rol</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Empleado">Empleado</option>
                    </select>
                </div>

                <!-- Auth Buttton -->
                <button type="submit" class="w-full py-3 mt-10 bg-teal-600 rounded-md 
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-teal-500 hover:shadow-none">
                    Registrar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection