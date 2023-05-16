@extends('layouts.admin-app')

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="main" id="main">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                     </div>
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                     
										<th>ID</th>
                                        <th>DNI</th>
                                        <th>Nombre</th>
                                        <th>Nacimiento</th>
										<th>Email</th>
										<th>Tipo de Servicio</th>
									
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users_ops as $users)
                                        <tr>
                                           {{-- HAY QUE ARREGLAR RESPONSIVE Y VISIBILIDAD DE TABLA  se rompe el paginado--}}
											<td>{{ $users->id }}</td>
											<td>{{ $users->dni }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->nacimiento }}</td>
											<td>{{ $users->email }}</td>
                                            <td>{{ $users->type_service_id}}</td>
                                            <td>
                                                <form action="{{ route('users.destroy',$users->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('users.show',$users->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$users->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
