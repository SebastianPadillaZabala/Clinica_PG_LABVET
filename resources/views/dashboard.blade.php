<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Clinica</title>
</head>

<body>
    <div class="flex h-screen w-auto">
        @include('leftside')
        <div class="flex-1 flex flex-col mx-auto overflow-y-auto">
            <section id="content">
                <div class="container">
                    @yield('content')
                </div>
            </section>
            @stack('scripts')
            @livewireScripts
            @livewireStyles
</body>

</html>