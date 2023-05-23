@extends('layouts.app')

@section('content')
<div class="regular-progression">
    <div class="container text-center">
        <div class="row responsivo pt-5">
          <div class="col">
            <h2 class=" mt-5 fw-semibold "> Ruta {{$ruta->id}}</h2>
            <h3 class=" mt-4 mb-3">Origen - Destino</h3>
            <h3 class=" mt-4 mb-5">{{$ruta->name}}</h3>
            <h2 class="mt-5  fw-semibold ">Tarifa: {{$ruta->cost}}</h2>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/mapa-buses.png') }}">
          </div>
        </div>
                        {{-- esto aca esta iterandose no asi --}}

        <div class="row ">
            @foreach ($ruta->paradas as $paradas)
            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/autobus-parada.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <span class="card-text">Parada</span>
                    <h5 class="card-title">{{ $paradas->name_ref }}</h5>
                    <a href="/viewOneParada/{{$paradas->id}}" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
</div>
@endsection
