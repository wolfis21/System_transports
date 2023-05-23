@extends('layouts.app')

@section('content')
<div class="regular-progression">
    <div class="container text-center">
        <div class="row responsivo pt-5" style="padding: 170px;">
          <div class="col">
            <h2 class=" mt-5 fw-semibold ">Parada de la Ruta</h2>
            
            <h3 class=" mt-4 mb-5">{{$paradaOne->name_ref}}</h3>
            
            <h2 class="mt-5  fw-semibold ">Coordenada: <a href="{{$paradaOne->coordenada}}" target="_blank" class=" mt-4 mb-5 ">Direccion aprox.</a></h2>
            
          </div>
          <div class="col-6">
            <img src="{{ asset('img/img5.png') }}">
          </div>
        </div>

</div>
@endsection
