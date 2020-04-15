@extends('layouts.app')
@section('title', 'Create a ticket')

@section('content')

<div class="container col-md-8 col-md-offset-2">
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
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="card mt-5">
        <div class="card-header">
            <h5 class="float-left">Gestionar items</h5>
            <div class="clearfix"></div>
        </div>
        <div class="card-body mt-2">
            <p>
                <a href="{{  url('/items/create') }}" class="btn btn-primary">
                    Agregar nuevo item
                </a>
            </p>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Código</th>
                        <th scope="col">Serial</th>
                        <th scope="col">Acción</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->codigo }}</td>
                        <td>{{ $item->serial }}</td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="{{ url('/items/'.$item->id.'/edit') }}">
                                Editar item
                            </a>
                            <a class="btn btn-danger btn-xs" href="{{ url('/averias/'.$item->id.'/create') }}">
                                Registrar avería
                            </a>
                        </td>
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
