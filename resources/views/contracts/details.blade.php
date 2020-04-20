@extends('layouts.app')

@section('title', 'Detalles del Contrato #'.$contract->id)

@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="float-left">Items del Contrato #{{ $contract->id }}</h5>
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
                        <th>Item</th>
                        <th>Serial</th>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Acción</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($contract->details as $detail)
                    <tr>
                        <td>{{ $detail->item_id }}</td>
                        <td>{{ $detail->item->serial }}</td>
                        <td>{{ $detail->item->name }}</td>
                        <td>{{ $detail->item->machine->modelo }}</td>
                        <td>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="contract_detail_id" value="{{ $detail->id }}">
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <form action="" method="POST">
                    @csrf

                    <button class="btn btn-primary btn-block" type="submit">
                        Confirmar y cerrar contrato
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
