@extends('layouts.app')

@section('title', 'Matriz de Gerencia Hospitalaria')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header ">
            <h5 class="float-left">Matriz</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th colspan="2">Buenas</th>
                        <th colspan="2">Afectadas en el centro</th>
                        <th colspan="2">Averiadas en el taller</th>
                    </tr>
                    <tr>
                        <th></th>
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    @foreach ($machines as $machine)
                        <td>
                            Estado 0
                            Machine {{ $machine->id }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                    <td>
                        Estado 1
                        Machine {{ $machine->id }}
                    </td>
                    @endforeach
                    @foreach ($machines as $machine)
                    <td>
                        Estado 2
                        Machine {{ $machine->id }}
                    </td>
                    @endforeach
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
