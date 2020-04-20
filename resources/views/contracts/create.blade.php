@extends('layouts.app')

@section('title', 'Create nuevo Contrato')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Crear nuevo Contrato</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                <form method="post" action="{{ url('/contracts') }}">
                    @csrf

                    <fieldset>
                        <div class="form-group">
                            <select class="form-control" name="customer_id" id="machine_id" >
                                <option value="">Seleccione cliente</option>
                                @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">
                                    {{ $customer->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción del contrato</label>
                            <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Registrar contrato</button>
                            <a href="/" class="btn btn-default">Cancelar</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
