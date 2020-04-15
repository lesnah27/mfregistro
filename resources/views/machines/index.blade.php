@extends('layouts.app')
@section('title', 'View Machine')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Machine</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if ($machines->isEmpty())
                    <p> There is no machine.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>marca</th>
                            <th>modelo</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $machines as $machine)
                            <tr>
                                <td>{{ $machine->id }} </td>
                                <td>{{ $machine->name }}</td>
                                <td>{{ $machine->marca}}</td>
                                <td>{{ $machine->modelo}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

@endsection
