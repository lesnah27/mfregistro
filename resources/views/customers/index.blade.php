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
                            @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }} </td>
                                <td>{{ $customer->name }} </td>
                                <td>{{ $customer->category->name }}</td>
                                <td>{{ $customer->created_at }}</td>
                                <td>
                                    <a href="{{ url('customers/'.$customer->id.'/items') }}" class="btn btn-primary">
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
