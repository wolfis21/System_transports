<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
          <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img src="{{ asset('img/autobus.png') }}" alt="logo" class="logo" style="">
                Transportes Terrestres
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/buses">Autobuses</a></li>
                      <li><a class="dropdown-item" href="/pisteros">Pisteros</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Login
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="/login">Admin</a></li>
                      <li><a class="dropdown-item" href="/login-usersop">User</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <main class="">
            @yield('content')
        </main>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <!-- Aquí puedes agregar los elementos del formulario de inicio de sesión -->
                      <h1>Hola</h1>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary">Iniciar sesión</button>
                  </div>
              </div>
          </div>
      </div>

      <footer class="bg-white">
        <div class="container text-center">
          <div class="row">
            <div class="col-6">
              <h2>Contactanos</h2>
            </div>
            <div class="col">
              <h4 class="fs-4 fw-semibold">Telefonos</h4><br>
              <p>04121234567</p>
              <p>02861234567</p>
            </div>
            <div class="col">
              <h4 class="fs-4 fw-semibold">Correo Electronico</h4> <br>
              <p>correo@correo.com</p>
            </div>
           
          </div>
        </div>
          <hr class="container mt-5">
          <p class="container text-center">&copy; 2023 Todos los derechos son reservados</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
