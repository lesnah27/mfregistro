@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro De Nuevo Cliente</div>

                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre De Cliente</label>

                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>

                                    <select name="category_id" class="form-control" >
                                        <option value="">--- Seleciona La Gerencia Comercial ---</option>
                                        @foreach ($category as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>

                            </div>
                        </div>

                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <p>
                        <a href="{{  url('/customers') }}" class="btn btn-primary">
                            Agregar Nuevo Cliente
                        </a>
                    </p>
                            </div>


                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>


  @endsection
