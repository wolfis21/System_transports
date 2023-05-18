@extends('layouts.admin-app')

@section('template_title')
    Actualizacion de Ruta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-5">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizacion de Ruta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ruta.update', $ruta->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('ruta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection