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
        <h1 class="mt-12">@yield('title2')</h1>
          <a href=@yield('link')>
            <button class="btn btn-success mt-5">Cadastrar</button>
          </a>
    </div>

        <div class="container text-center mt-15 h-15vh">
            <table class="table table-hover">
                <thead>
                <tr>
                    @yield('thead')
                </tr>
                </thead>

                <tbody>
                    @yield('tbody')
                </tbody>
            </table>
            @yield('pagination')
        </div>
    
</body>
</html>