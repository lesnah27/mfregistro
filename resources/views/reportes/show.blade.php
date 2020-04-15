@extends('layouts.app')
@section('title', 'View a ticket')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">{{ $machine->serial }}</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <p> <strong>Status</strong>: {{ $machine->status ? 'Pending' : 'Answered' }}</p>
                <p> {{ $machine->name }} </p>
                <a href="{{ action('ReporteController@store', $machine->id) }}" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-info">Delete</a>
            </div>
        </div>
    </div>

@endsection
