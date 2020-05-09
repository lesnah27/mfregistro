@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="float-left">Reporte matriz resumen</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th colspan="3" class="text-center">
                            <strong>Por contrato</strong>
                        </th>
                        <th colspan="2" class="text-center">Buenas</th>
                        <th colspan="2" class="text-center">Afectadas en el centro</th>
                        <th colspan="2" class="text-center">Averiadas en el taller</th>
                        <th colspan="2" class="text-center" title="% de buenas sobre el total">
                            Disponibilidad
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        <th>Total</th>
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                        @foreach ($machines as $machine)
                            <th>{{ $machine->modelo }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                <tr>

                    <td>{{$category->name}}</td>
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count() }}
                        </td>
                    @endforeach
                    <td>
                        {{ App\Item::whereIn('customer_id', $category->customerIds)->count() }}
                    </td>
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 0)->where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count() }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 1)->where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count() }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 2)->where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count() }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                    <?php
                        $goodStatusCount = App\Item::where('status', 0)->where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count();
                        $totalMachineCount = App\Item::where('machine_id', $machine->id)->whereIn('customer_id', $category->customerIds)->count();

                        if ($totalMachineCount === 0)
                            $percentage = '-';
                        else {
                            $percentage = $goodStatusCount / $totalMachineCount * 100;
                            $percentage = $percentage . ' %';
                        }
                    ?>
                    <td class="{{ App\Status::background($percentage) }}">
                        {{ $percentage }}
                    </td>
                    @endforeach
                </tr>
                @endforeach
                <tr>
                    <td><strong>Total</strong></td>
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('machine_id', $machine->id)->whereNotNull('customer_id')->count() }}
                        </td>
                    @endforeach
                    <td>
                        {{ App\Item::whereNotNull('customer_id')->count() }}
                    </td>
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 0)->where('machine_id', $machine->id)->whereNotNull('customer_id')->count() }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 1)->where('machine_id', $machine->id)->whereNotNull('customer_id')->count() }}
                        </td>
                    @endforeach
                    @foreach ($machines as $machine)
                        <td>
                            {{ App\Item::where('status', 2)->where('machine_id', $machine->id)->whereNotNull('customer_id')->count() }}
                        </td>
                    @endforeach

                    @foreach ($machines as $machine)
                        <td>
                            <?php
                                $goodStatusCount = App\Item::where('status', 0)
                                    ->whereNotNull('customer_id')
                                    ->where('machine_id', $machine->id)->count();

                                $totalMachineCount = App\Item::where('machine_id', $machine->id)
                                    ->whereNotNull('customer_id')
                                    ->count();

                                if ($totalMachineCount === 0)
                                    $percentage = '-';
                                else {
                                    $percentage = $goodStatusCount / $totalMachineCount * 100;
                                    $percentage = $percentage . ' %';
                                }
                            ?>
                            {{ $percentage }}
                        </td>
                    @endforeach
                </tr>
                </tbody>
            </table>

            <a href="{{ url('reports') }}" class="btn btn-secondary">
                < Volver al listado de reportes
            </a>
        </div>
    </div>
</div>
@endsection
