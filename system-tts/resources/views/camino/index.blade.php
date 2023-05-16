@extends('layouts.admin-app')

@section('template_title')
    Camino
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
                                     
										<th>N. Camino</th>
										<th>Nombre</th>
										<th>Costo</th>
										<th>Usuario Responsable</th>
									
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($camino_cp as $camino)
                                        <tr>
                                           
											<td>{{ $camino->id }}</td>
											<td>{{ $camino->name }}</td>
											<td>{{ $camino->cost }}</td>
                                            <td>{{ $camino->users_ops_id }}</td>
                                            <td>
                                                <form action="{{ route('camino.destroy',$camino->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('camino.show',$camino->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('camino.edit',$camino->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
