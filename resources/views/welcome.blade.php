<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página Inicial</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
            @if (Route::has('login'))
                <div class="flex justify-center items-center h-screen w-full space-x-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-gray-400 text-3xl font-semibold text-gray-600
                         hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline 
                         focus:outline-2 focus:rounded-sm focus:outline-red-500 rounded-full px-6 py-2">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="bg-gray-400 text-3xl font-semibold text-gray-600
                         hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline 
                         focus:outline-2 focus:rounded-sm focus:outline-red-500 rounded-full px-6 py-2">Entrar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-gray-400 text-3xl font-semibold text-gray-600
                         hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline 
                         focus:outline-2 focus:rounded-sm focus:outline-red-500 rounded-full px-6 py-2">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif
    </body>
</html>
