@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar De Nuevo Cliente</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('clientes.update',$customers->id) }}">
                        @method('PUT')
                        @csrf
                        @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre De Cliente</label>

                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name" placeholder="{{$customers->name}}"
                                value="{{$customers->name}}"  autofocus>
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
                                <button type="submit" class="redondo btn btn-info"><i class="fas fa-save"></i> Guardar</button>
                            </div>


                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>


  @endsection
