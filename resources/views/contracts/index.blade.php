@extends('layouts.app')

@section('title', 'Lista de Contratos')

@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Lista de Contratos</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <a class="btn btn-primary" href="{{ url('contracts/create') }}">
                    Registrar contrato
                </a>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contracts as $contract)
                    <tr>
                        <td>{{ $contract->customer_id }}</td>
                        <td>{{ $contract->description }}</td>
                        <td>{{ $contract->created_at }}</td>
                        <td>
                            <a href="{{ url('/contracts/'.$contract->id.'/details') }}">
                                Ver
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
