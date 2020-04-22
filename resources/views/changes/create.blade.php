@extends('layouts.app')

@section('title', 'Registrar un cambio de estado')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card mt-5">
            <div class="card-header ">
                <h5 class="float-left">Cambio de estado</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if (session('notification'))
                <div class="alert alert-info">
                    {{ session('notification') }}
                </div>
                @endif

                <form method="POST" action="{{ ('/changes') }}">
                    @csrf

                    <fieldset>
                        <div class="form-group">
                            <label for="serial">Serial del Equipo</label>
                            <input type="text" name="serial" id="serial" class="form-control" required>
                         </div>
                        <div class="form-group">
                            <label for="status">Nuevo estado</label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="">Nuevo estado</option>
                                <option value="0">Bueno</option>
                                <option value="1">Afectado</option>
                                <option value="2">Averiado</option>
                            </select>
                         </div>

                         <a href="{{  url('/changes') }}" class="btn btn-default">Cancelar</a>
                         <button type="submit" class="btn btn-primary">Registrar cambio</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
