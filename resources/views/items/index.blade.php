    @extends('layouts.app')
    @section('title', 'Create a ticket')

    @section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Filtro de búsqueda</td>
                </tr>
                <tr>
                    <td>
                        <form class="form-inline">
                            <input name="serial"
                                class="form-control mr-sm-2"
                                type="search" placeholder="Serial" value="{{ $serial }}">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

                                    <a href="{{  url('/items') }}" class="btn btn-primary">
                                        X
                                    </a>

                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="card mt-5">
            <div class="card-header">
                <h5 class="float-left">Listados De Equipos Medicos</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <p>
                    <a href="{{  url('/items/create') }}" class="btn btn-primary">
                        Agregar nuevo Equipo
                    </a>
                </p>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Serial</th>
                            <th scope="col">Código</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acción</th>
                            </tr>

                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->machine->marca }}</td>
                            <td>{{ $item->machine->modelo }}</td>
                            <td>{{ $item->serial }}</td>
                            <td>{{ $item->codigo }}</td>
                            <td><a href="{{ action('StatusChangeController@create', $item->id) }}">{{ $item->status_text }}</a></td>
                            <td>
                                <form action="{{ action('ItemController@destroy',$item->id) }}" method="post">
                                    {{csrf_field()}}
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger btn-xs" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $items->links() }}
            </div>
        </div>
    </div>
    @endsection



