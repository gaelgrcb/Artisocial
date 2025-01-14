<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artisocial - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-500 dark:bg-gray-900 dark:text-gray-200 dark">
    <header class="p-5 border-b bg-white shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-4xl font-bold">@yield('titulo')</h1>
            <nav class="flex gap-3">
                <a class="text-4xl font-bold dark:text-gray-300" href="login">Login</a>
                <a class="text-4xl font-bold dark:text-gray-300" href="registro">Register</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-5">
        @yield('contenido')
    </main>
</body>

</html>