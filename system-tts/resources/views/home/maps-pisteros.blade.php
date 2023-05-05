@extends('layouts.app')

@section('content')
<div class="regular-progression">
    <div class="container text-center">
        <div class="row responsivo pt-5">
          <div class="col">
            <h2 class=" mt-5 fw-semibold "> Centro {{$camino->id}}</h2>
            
            <h3 class=" mt-4 mb-5">{{$camino->name}}</h3>
            <br>
            <h2 class="mt-5  fw-semibold ">Tarifa</h2>
            <h3 class=" mt-4 mb-5">Costo: {{$camino->cost}}</h3>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/img5.png') }}">
          </div>
        </div>
                        {{-- esto aca esta iterandose no asi --}}

        <div class="row ">
            @foreach ($camino->center as $center)
            <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                <div class="card-body">
                    <span class="card-text">Centro</span>
                    <h5 class="card-title">{{ $center->name_ref }}</h5>
                    <a href="/viewOneCenter/{{$center->id}}" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

