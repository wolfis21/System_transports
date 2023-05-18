@extends('layouts.admin-app')

@section('template_title')
    Actualizacion de Parada
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 pt-5">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizacion de Parada</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('parada.update', $parada->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('parada.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection