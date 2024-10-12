<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisocial - @yield('titulo')</title>
    <script src="{{ asset('js/app.js')}}"defer></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100" >
    <header class="p-5 border-b bg-white shadow" >
        <div class="container mx-auto flex justify-between items-center" >
            <h1 class="text-3xl font-black">
                <a href="/">Artisocial</a>
            </h1>
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-m"
                href="#">
                Login</a>
                <a class="font-bold uppercase text-gray-600 text-m"
                href="{{route('register')}}">
                Crear Cuenta</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="p-5 mt-10 text-center font-bold text-gray-500 uppercase">
        Artisocial - Todos los derechos reservados {{ now()->year }}
    </footer>
</body>
</html>