<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Machine;
use App\Item;
use DB;

class MachineController extends Controller
{
    public function index()
    {
        $machines = Machine::all();
       
        return view('machines.index', compact('machines'));
    }

    public function create()
    {
        $machineid = Machine::all();

       return view('machines.create',compact ('machineid','machine'));
       //dd($machine);
    }

    public function store(Request $request)
    {
        
        Machine::create([
            'name' => $request->get('name'),
            'marca' => $request->get('marca'),
            'modelo' => $request->get('modelo'),
          
        ]);
        return redirect('/machines')->with('status', 'Nuevo maquina registrado.');
       
    }

    public function show($id)
    {
        $machine = Machine::find($id);
        return view('machines.show', compact('machine'));
    }

    public function edit($id)
    {
        $machineid = Machine::all();
        $machine = Machine::find($id);
        return view('Reportes.edit', compact('machine','machineid'));
    }

    public function update(Request $request, $id)
    {

        $machine = Machine::find($id);
        'serial' -> $request->get('serial');
        'name' -> $request->get('name');
        'modelo' -> $request->get('modelo');
        'marca' -> $request->get('marca');

        $machine->save();

        return redirect('/create')->with( 'Your ticket has been created! Its unique id is: ');
        // return redirect(action('ReporteController@edit', $machine->id))->with('status'.$id. 'The ticket ');

        //dd($id);
    }

    public function destroy($id)
    {
        //
    }
}
