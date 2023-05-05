@extends('layouts.app')

@section('content')
<div class="regular-progression">
    <div class="container text-center">
        <div class="row responsivo pt-5">
          <div class="col">
            <h2 class=" mt-5 fw-semibold ">Parada de la Ruta "pensar en pone id"</h2>
            
            <h3 class=" mt-4 mb-5">{{$paradaOne->name_ref}}</h3>
            
            <h2 class="mt-5  fw-semibold ">Coordenada</h2>
            <a href="{{$paradaOne->coordenada}}" class=" mt-4 mb-5">Direccion aprox.</a>
          </div>
          <div class="col-6">
            <img src="{{ asset('img/img5.png') }}">
          </div>
        </div>

</div>
@endsection
