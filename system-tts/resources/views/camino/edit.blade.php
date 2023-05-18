@extends('layouts.admin-app')

@section('template_title')
    Actualizacion de Camino
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-5">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizacion de Camino</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('camino.update', $camino->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('camino.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection