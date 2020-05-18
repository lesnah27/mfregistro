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
                        <th>Fecha De Creacion</th>
                        <th>Accion</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ( $categ as  $categ)
                    <tr>
                        <td>{{  $categ->name }}</td>
                        <td>{{  $categ->created_at}}</td>
                        <td>
                            <form action="{{action('CategoryController@destroy', $categ->id)}}" method="post">
                             {{csrf_field()}}
                             <input name="_method" type="hidden" value="DELETE">

                             <button class="btn btn-danger btn-xs" type="submit"><span ></span>Eliminar</button>
                           </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


