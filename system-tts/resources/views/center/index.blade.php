@extends('layouts.admin-app')

@section('template_title')
    Centros
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
                                     
										<th>N. Centro</th>
										<th>Noombre de Referencia</th>
										<th>Coordenada</th>
										<th>img Referencia</th>
									
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($center_cp as $center)
                                        <tr>
                                           {{-- HAY QUE ARREGLAR RESPONSIVE Y VISIBILIDAD DE TABLA  se rompe el paginado--}}
											<td>{{ $center->id }}</td>
											<td>{{ $center->name_ref }}</td>
											<td>{{ $center->coordenada }}</td>
                                            <td>{{ $center->img_ref }}</td>
                                            <td>
                                                <form action="{{ route('center.destroy',$center->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('center.show',$center->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('center.edit',$center->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {{ $center_cp->links() }}
            </div>
        </div>
    </div>
@endsection
