@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro De Nuevo Cliente</div>
                <div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div><br />
                    @endif


                    <div class="col-sm-12">

                        @if(session()->get('success'))
                          <div class="alert alert-success">
                            {{ session()->get('success') }}
                          </div>
                        @endif
                      </div>



                <div class="card-body">
                    <form method="POST" action="{{ route('clientes.store') }}">
                        @csrf
                            @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

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
