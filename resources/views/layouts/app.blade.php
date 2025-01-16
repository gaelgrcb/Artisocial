<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisocial - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-500 dark:bg-gray-900 dark:text-gray-200">
    <header class="p-5 border-b shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-4xl font-bold">
                <a href="/">Artisocial</a>
            </h1>
            <nav class="flex gap-3">
                <a class="text-2xl font-bold hover:text-gray-400" href="login">Login</a>
                <a class="text-2xl font-bold hover:text-gray-400" href="registro">Register</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-10">
        <h2 class="font-bold text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>
    <footer class="text-center p-5 dark:text-gray-500 font-bold uppercase">
        Gael Tilin  - Todos los derechos reservados {{ date('Y') }}
    </footer>
</body>

</html>