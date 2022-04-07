<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Control Gasto') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->   
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body class=""style="font-family:algeria;background:#ebebeb">
<nav class="navbar navbar-expand-lg navbar-light " style="font-family: algeria;background:#292f36;" >             
            <h1 class="text-white">𝕺'𝕂𝕖𝕧𝕚𝕟</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" style="margin-left:55%;">
    <div class="navbar-nav">

      <a class="btn btn-dark" href="{{route('usuarios')}}">Usuarios</a>

      <a class=" btn btn-dark" href="{{route('categorias')}}">Categorias</a>
      <a class=" btn btn-dark" href="{{route('movimientos')}}">movimientos</a>
      <a class=" btn btn-dark" href="{{route('tipos')}}">Tipos</a>


                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
  </div>
</nav>
       <div class="">
        
        <!-- Esto es una seccion -->
        @yield('content') 
    </div>
   <!--  <div class="footer" style="background:black;color: white;">
        <h1>Footer</h1>
    </div> -->
</body>
</html>
