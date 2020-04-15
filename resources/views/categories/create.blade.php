@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro De Gerencia Comercial</div>

                <div class="card-body">
                    <form method="POST">
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre De Gerencia</label>

                            <div class="col-md-6" >
                                <input id="name" type="text" class="form-control " name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>


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
