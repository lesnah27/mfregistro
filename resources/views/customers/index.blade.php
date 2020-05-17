    @extends('layouts.app')
    @section('title', 'Listados De Contratos')
    @section('content')

        <div class="container col-md-8 col-md-offset-2 mt-5">
            <div class="card">
                <nav class="navbar navbar-light float-right">
                    <form class="form-inline">

                   <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    <a href="{{  url('/clientes') }}" class="btn btn-primary">
                        X
                    </a>
                    </form>
                </nav>

                <div class="card-header ">
                    <h5 class="float-left">Listados de Clientes</h5>
                    <div class="clearfix"></div>
                </div>
                <div class="card-body mt-2">
                        <p>
                            <a href="{{ route('clientes.create')}}" class="btn btn-primary">
                                Agregar Nuevo Cliente
                            </a>
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Gerencia</th>
                                    <th>Fecha de registro</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }} </td>
                                    <td><a href="{{ action('CustomerController@edit', $customer->id) }}">{{ $customer->name }} </a> </td>

                                    <td>{{ $customer->category->name }}</td>
                                    <td>{{ $customer->created_at }}</td>
                                    <td>
                                        <a href="{{ url('customers/'.$customer->id.'/items') }}" class="btn btn-primary">
                                            Asignar Equipo
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $customers->links() }}
                </div>

            </div>
        </div>

    @endsection
