@extends('layouts.app')

@section('content')
    <div class="regular-progression">
        <div class="text-center">
            <h2 class="fw-bold fs-1">Centros de Pisteros</h2>
            {{-- una mierda de imagen cambiar --}}
            <img src="{{ asset('img/img3.png') }}" class="img-home-pisteros">
        </div>

        <hr class="container mt-5">
        <div class="container text-center  ">
            <div class="scroll-container">
                <nav class="navbar bg-body-tertiary">
                    {{-- buscador que se tiene que hacer funcional --}}
                    <div class="mt-5 container-fluid justify-content-center">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Busca aqui tu ruta"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                    {{-- esto aca esta iterandose no asi --}}

                </nav>
                <div class="row ">
                    @foreach ($camino_cp as $camino)
                    <div class="zoom-contenedor col-12 col-md-6 col-xl-2 m-5 p-4 card borde-carta">
                        <img src="{{ asset('img/img1.png') }}" class="card-img-top borde-imagen-carta" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Camino {{$camino->id}}</h5>
                            <p class="card-text">{{$camino->name}}</p>
                            <a href="/viewsMapsPisteros/{{$camino->id}}" class="btn btn-primary borde-botones boton-ver">Ver mas</a>
                        </div>
                    </div>
                    @endforeach

                </div>
                
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>

        </div>
    </div>
@endsection
