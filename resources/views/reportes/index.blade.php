@extends('layouts.app')
@section('title', 'View all tickets')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Tickets</h5>

                <table class="table table-bordered" >
                    <tbody>
                        <tr>
                            <td>Filtro De Busqueda</td>
                            <tr>
                                    <td>
                                        <nav class="navbar navbar-light float-right">
                                            <form class="form-inline">
                                                <input name="buscarpor2" class="form-control mr-sm-2" type="search" placeholder="Serial" aria-label="Search">
                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                            </form>
                                        </nav>
                                    </td>
                            </tr>
                    </tr>
                </tbody>
                </table>


                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if ($machine->isEmpty())
                    <p> There is no ticket.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Serial</th>
                            <th>Nombre</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Cliente</th>
                            <th>Gerencia</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($machine as $ticket)
                            <tr>
                                <td>{{ $ticket->id }} </td>

                                <td>
                                    <a href="{{ action('ReporteController@show', $ticket->id) }}">{{ $ticket->serial }} </a>
                                </td>
                                <td>{{ $ticket->name }} </td>
                                <td>{{ $ticket->modelo }}</td>
                                <td>{{ $ticket->marca }}</td>
                                <td>{{-- $ticket->status?'Pending':'Answered' --}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

@endsection
