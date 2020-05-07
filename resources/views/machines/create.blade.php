@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro De Equipos/Item</div>
 
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre De Equipo</label>
                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Serial</label>
                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Marca</label>
                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Modelo</label>
                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <br>
                            </div>
                        </div>



                       <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


  @endsection
