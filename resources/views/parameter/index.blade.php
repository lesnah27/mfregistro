@extends('layouts.app')
@section('title', 'Listados De Contratos')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Listados de Clientes</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                    <p>
                        <a href="{{  url('/customers/create') }}" class="btn btn-primary">
                            Agregar Nuevo Cliente
                        </a>
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Gerencia</th>
                                <th>Fecha de registro</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($parameters as $parameter)
                            <tr>
                                <td>{{ $parameter->name}}</td>
                                <td>{{ $parameter->value}}</td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-primary">
                                        Asignar items
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>

@endsection
