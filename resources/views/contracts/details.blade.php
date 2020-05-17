@extends('layouts.app')

@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">
                    Cliente #{{ $customer->id}}:
                    "{{ $customer->name }}"
                </h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if (session('notification'))
                <div class="alert alert-info">
                    {{ session('notification') }}
                </div>
                @endif

                <form action="" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="serial">Serial del item</label>
                        <input type="text" name="serial" id="serial" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Agregar item
                        </button>
                    </div>
                </form>

                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Serial</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->serial }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->machine->marca }}</td>
                        <td>{{ $item->machine->modelo }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="item_id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
