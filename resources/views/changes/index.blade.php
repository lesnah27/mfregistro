@extends('layouts.app')

@section('title', 'Cambios de estado para Equipos')

@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Historial de cambios de estado</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if (session('notification'))
                <div class="alert alert-info">
                    {{ session('notification') }}
                </div>
                @endif


                <table class="table">
                    <thead>
                    <tr>
                        <th title="ID del cambio">ID</th>
                        <th>Equipo</th>
                        <th>Nombre</th>
                        <th>Modelo</th>
                        <th>Fecha de cambio</th>
                        <th>Nuevo estado</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($changes as $change)
                        <tr>
                            <td>{{ $change->id }}</td>
                            <td>{{ $change->item->serial }}</td>
                            <td>{{ $change->item->name }}</td>
                            <td>{{ $change->item->modelo }}</td>
                            <td>{{ $change->created_at }}</td>
                            <td>{{ $change->status_text }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
