@extends('layouts.app')

@section('title', 'Lista de Contratos')

@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Lista De Gerencias</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <a class="btn btn-primary" href="{{ url('gerencias/crear') }}">
                   Crear Nueva Gerencia
                </a>

                <table class="table">
                    <thead>
                    <tr>
                        <th>Gerencia Comercial</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $categ as  $categ)
                    <tr>
                        <td>{{  $categ->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
                     
           
