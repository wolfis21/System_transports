@extends('layouts.users.bus-app')

@section('template_title')
    Rutas
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
                                     
										<th>N. Ruta</th>
										<th>Nombre</th>
										<th>Costo</th>
										<th>Usuario Responsable</th>
									
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rutas_bs as $ruta)
                                        <tr>
                                           
											<td>{{ $ruta->id }}</td>
											<td>{{ $ruta->name }}</td>
											<td>{{ $ruta->cost }}</td>
                                            <td>{{ $ruta->users_ops_id }}</td> {{-- no es eficiente porque tiene problemas al traer el name --}}
                                            <td>
                                                <form action="{{ route('ruta.destroy',$ruta->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('ruta.users.edit',$ruta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button> --}}
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
