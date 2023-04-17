@extends('layouts.app')

@section('content')
<div class="regular-progression">
    <div class="container text-center">
        <div class="row responsivo pt-5">
          <div class="col">
            <h2 class=" mt-5 fw-semibold "> Ruta {{$ruta->id}}</h2>
            
            <h3 class=" mt-4 mb-5">Origen - Destino</h3>
            <h3 class=" mt-4 mb-5">{{$ruta->name}}</h3>
            <br>
            <h2 class="mt-5  fw-semibold ">Tarifa</h2>
            <h3 class=" mt-4 mb-5">Costo: {{$ruta->cost}}</h3>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/img5.png') }}">
          </div>
        </div>
                        {{-- esto aca esta iterandose no asi --}}

        <div class="row ">
            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ruta N</h5>
                    <p class="card-text">Name</p>
                    <a href="#" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>

            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ruta N</h5>
                    <p class="card-text">Name</p>
                    <a href="#" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>

            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ruta N</h5>
                    <p class="card-text">Name</p>
                    <a href="#" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>
            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ruta N</h5>
                    <p class="card-text">Name</p>
                    <a href="#" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection
