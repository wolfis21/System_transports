@extends('layouts.app')

@section('content')
    <div class="regular-progression pb-1 ">
        <div class="container text-center section-bg">
            <div class="row row-cols-1 row-cols-md-2 align-items-center responsivo">
                <div class="col fs-2 p-4 pt-5">
                    <h2 class="fs-1 fw-bold">Orientado en un par de clicks</h2>
                    <br>
                    <button type="button" class="btn btn-outline-light text-dark fw-bold rounded-pill"><a class="navbar-brand"
                            style="font-size:20px" href="/buses">Autobuses</a></button>
                    <button type="button" class="btn btn-outline-light text-dark fw-bold rounded-pill"><a
                            class="navbar-brand" style="font-size:20px" href="/pisteros">Pisteros</a></button>
                </div>
                <div class="col p-4 pt-5">
                    <img src="{{ asset('img/autobus-escolar.png') }}" class="img-fluid max-width-100">
                </div>
                <div class="col p-4 pt-5">
                    <img src="{{ asset('img/transporte.png') }}" class="img-fluid max-width-100">
                </div>
                <div class="col fs-4 p-4 pt-5">
                    <h2 class="fs-2 fw-bold">A tu disposición</h2>
                    <br>
                    <p class="justificar-texto">Una aplicación que te brinda información precisa y
                        actualizada sobre las paradas de autobús y las rutas necesarias en la ciudad. Nunca ha sido tan
                        fácil planificar tus viajes en autobús: con esta aplicación, puedes buscar la parada más cercana a
                        tu ubicación actual, conocer el tiempo estimado de llegada del siguiente autobús, y obtener
                        información sobre las diferentes rutas disponibles para llegar a tu destino. Ya no tendrás que
                        preocuparte por perder el autobús o tomar una ruta equivocada, porque esta aplicación te proporciona
                        toda la información que necesitas para viajar sin problemas en la ciudad.</p>
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
                        <img src="{{ asset('img/autobus-home-4.png') }}" class="card-img-top borde-imagen-carta"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ruta {{ $ruta->id }}</h5>
                            <p class="card-text">{{ $ruta->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary borde-botones boton-ver-todas navbar-brand"
                    style="font-size: 20px; background: burlywood;" href="/buses">Ver Todos</a>
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
                        <img src="{{ asset('img/taxi-home-4.png') }}" class="card-img-top borde-imagen-carta"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Camino {{ $camino->id }}</h5>
                            <p class="card-text">{{ $camino->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <a class="btn btn-secondary borde-botones boton-ver-todas navbar-brand"
                    style="font-size: 20px; background: burlywood;" href="/pisteros">Ver Todos</a>
            </div>

            <hr class="w-100 mt-5">
        </div>
        <div class="container text-center custom-pdd-home">

            <div class="row margen-top-bottom-30">
                <div class="col">
                    <h2>Por que confiar en nosotros?</h2><br>
                    <p class="justificar-texto">En primer lugar, nuestra aplicación se basa en fuentes de información
                        confiables y actualizadas para proporcionar información precisa y detallada sobre las paradas de
                        autobús y las rutas necesarias en la ciudad. Nos aseguramos de trabajar con los proveedores de
                        transporte público locales para mantener nuestra aplicación actualizada con los últimos cambios en
                        las rutas y horarios de los autobuses. Además, nuestro equipo de desarrolladores trabaja
                        constantemente para mejorar la funcionalidad de la aplicación y garantizar una experiencia de
                        usuario fluida y sin problemas.</p>
                </div>
                <div class="col"><br><br><br>
                    <p class="justificar-texto">En segundo lugar, nuestra aplicación es fácil de usar y está diseñada
                        pensando en la comodidad del usuario. Nos esforzamos por crear una interfaz intuitiva y amigable que
                        sea fácil de navegar para cualquier persona, independientemente de su nivel de experiencia con la
                        tecnología. Además, ofrecemos soporte técnico y atención al cliente para ayudar a los usuarios en
                        caso de cualquier problema o duda relacionada con la aplicación. En resumen, nuestra aplicación es
                        confiable, actualizada y fácil de usar, lo que la convierte en la mejor opción para cualquier
                        persona que necesite información sobre paradas de autobús y rutas necesarias enla ciudad.</p>
                </div>
            </div>

        </div>

    </div>
@endsection
