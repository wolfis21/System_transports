@extends('layouts.app')

@section('content')
    <div class="regular-progression pb-1 ">
        <div class="container text-center section-bg">
            <div class="row row-cols-1 row-cols-md-2 align-items-center responsivo">
                <div class="col fs-2 p-4 pt-5">
                    <h2 class="fs-1 fw-bold">Orientado en un par de clicks</h2>
                    <br>
                    <button type="button" class="btn btn-outline-light text-dark fw-bold rounded-pill"><a class="navbar-brand" href="/buses">Autobuses</a></button>
                    <button type="button" class="btn btn-outline-light text-dark fw-bold rounded-pill"><a class="navbar-brand" href="/pisteros">Pisteros</a></button>
                </div>
                <div class="col p-4 pt-5">
                    <img src="{{ asset('img/img1.png') }}" class="img-fluid max-width-100">
                </div>
                <div class="col p-4 pt-5">
                    <img src="{{ asset('img/img2.png') }}" class="img-fluid max-width-100">
                </div>
                <div class="col fs-4 p-4 pt-5">
                    <h2 class="fs-2 fw-bold">A tu disposición</h2>
                    <br>
                    <p class="justificar-texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse facere
                        voluptatem suscipit! Qui, unde modi doloribus nisi cupiditaisci doloribus labore quos facilis
                        nostrum animi dolores aspernatur placeat voluptate consectetur libero similique deleniti, error
                        quidem mollitia, consequatu, consectet Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Incidunt reprehenderit impedit similique eaque earum aspernatur, quaerat nihil dolorem? Officiis
                        dolore fugit odio, conorem ipsum dolor sit amet consectetur.</p>
                </div>
            </div>
        </div>

        <hr class="container mt-5">
        <div class="d-flex p-2 justify-content-center">
            <h2>Vista Previa Buses</h2>
        </div>
        <div class="container text-center">
            <div class="row">
                @foreach ($rutas_bs as $ruta)
                <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                    <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ruta {{$ruta->id}}</h5>
                        <p class="card-text">{{$ruta->name}}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary borde-botones boton-ver-todas navbar-brand" href="/buses">Ver Todos</a>
            </div>

            <hr class="w-100 mt-5">
        </div>
        <div class="d-flex p-2 justify-content-center">
            <h2>Vista Previa Pisteros</h2>
        </div>
        <div class="container text-center">
            <div class="row">
                @foreach ($camino_cp as $camino)
                <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                    <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Camino {{$camino->id}}</h5>
                        <p class="card-text">{{$camino->name}}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                  <a class="btn btn-secondary borde-botones boton-ver-todas navbar-brand" href="/pisteros">Ver Todos</a>
            </div>

            <hr class="w-100 mt-5">
        </div>
        <div class="container text-center ">

            <div class="row margen-top-bottom-30">
                <div class="col">
                    <h2>Por que confiar en nosotros?</h2><br>
                    <p class="justificar-texto">lorem ipsum dolor sit orem ipsum dolor sit amet consectetur, adipisicing
                        elit. Nam adipisci doloribus labore quos facilis nostrum animi dolores aspernatur placeat voluptate
                        consectetur libero similique deleniti, error quidem mollitia, consequatu, consectet Lorem ipsum
                        dolor sit amet consectetur adipisicing elit. Incidunt reprehenderit impedit similique eaque earum
                        aspernatur, quaerat nihil dolorem? Officiis dolore fugit odio, conorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Nam adipisci doloribus labore quos facilis nostrum animi dolores
                        aspernatur placeat voluptate consectetur libero similique deleniti, error quidem mollitia,
                        consequatusequatur blanditiis nostrum voluptate necessitatibus aut laudantium aliquid.</p>
                </div>
                <div class="col"><br><br><br>
                    <p class="justificar-texto">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam adipisci
                        doloribus labore quos facilis nostrum animi dolores aspernatuorem ipsum dolor sit amet consectetur,
                        adipisicing elit. Nam adipisci doloribus labore quos facilis nostrum animi dolores aspernatur
                        placeat voluptate consectetur libero similique deleniti, error quidem mollitia, consequorem ipsum
                        dolor sit amet consectetur, adipisicing elit. Nam adipisci doloribus labore quos facilis nostrum
                        animi dolores aspernatur placeat voluptate consectetur libero similique deleniti, error quidem
                        mollitia, consequatuatur placeat voluptate consectetur libero similique deleniti, error quidem
                        mollitia, consequatur dolor sed.</p>
                </div>
            </div>

        </div>

    </div>
    
@endsection
