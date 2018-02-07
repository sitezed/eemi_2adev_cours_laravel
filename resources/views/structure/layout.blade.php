<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      {{-- la fonction asset() permet d'appeler des fichiers JS, CSS ou images.. en prenant pour racine e dossier public --}}
      <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body>
        <div class="container">
            <div class="content">
               @yield('contenu')
            </div>
        </div>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
