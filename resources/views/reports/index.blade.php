@extends('layouts.app')

@section('title', 'Matriz de Gerencia Hospitalaria')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="card mt-5">
        <div class="card-header ">
            <h5 class="float-left">Reportes disponibles</h5>
        </div>
        <div class="card-body">
            <p><strong>Reportes por gerencia:</strong></p>
            @foreach ($categories as $category)
                <a href="{{ url('reports/categories/'.$category->id) }}" class="btn btn-primary">
                    {{ $category->name }}
                </a>
            @endforeach

            <hr>

            <p><strong>Reporte general:</strong></p>
            <a href="{{ url('reports/general') }}" class="btn btn-primary">
                Reporte resumen
            </a>
        </div>
    </div>
</div>
@endsection
