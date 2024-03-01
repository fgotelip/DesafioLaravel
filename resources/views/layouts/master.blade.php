<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-bootstrap></x-bootstrap>
    <title>@yield('title')</title>
</head>
<body>
    <div class="text-center">
        <h1 class="mt-20">@yield('title2')</h1>
    </div>
    
    <div class="mt-12">
    @yield('content')
    </div>

    @yield('button')
    

</body>
</html>