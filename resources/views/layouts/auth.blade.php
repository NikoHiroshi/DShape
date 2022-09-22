<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/estilo.css') }}">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <title>DShape</title>
  </head>
  <body>

    <div class="login-bg position-relative">
        <h2><a class="btn btn-dark btn-lg text-white mt-2" href="/"><i class="fa-solid fa-arrow-left"></i> Voltar</a></h2>
        <div class="container">

                    @yield('container')

        </div>
    </div>

    <!-- Import separate Popper and Bootstrap JS -->
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
  </body>
</html>
