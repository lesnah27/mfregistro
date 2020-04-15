<html>
    <h1>
        @foreach ($Itemb->machine as $machine)
        <li>{{ $machine->name }}</li>
        @endforeach

        {{ $Itemb->machine->name }}

    </h1>
</html>
