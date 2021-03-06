<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Machine;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $serial = $request->get('serial');
        $items = Item::where('serial','like',"%$serial%")->latest()->paginate(25);
        return view('items.index', compact('items', 'serial'));
    }

    public function create()
    {
        $machines = Machine::all();
        return view('items.create', compact('machines'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'codigo' => 'required|unique:items|max:20',
            'serial' => 'required|unique:items|max:20',

        ]);

        Item::create([
            'name' => $request->get('name'),
            'codigo' => $request->get('codigo'),
            'serial' => $request->get('serial'),
            'machine_id' => $request->get('machine_id'),
            'description' => $request->get('description')
        ]);

        return redirect('/items')->with('status', 'Nuevo item registrado.');
    }

    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Item::find($id);
        $machines = Machine::all();
        return view('items.edit', compact('item', 'machines'));

    }

    public function update(Request $request, $id)
    {
     //  dd($request);
        $Item= Item::find($id);
        $Item->name = $request->get('name');
        $Item->serial = $request->get('serial');
        $Item->codigo = $request->get('codigo');
        $Item->description = $request->get('description');
        $Item->machine_id = $request->get('machine_id');
       // $Item->status = $request->get('status')->default(1);

        $Item->save();
       // return redirect('/registro_gerencia')->with('status', 'Fue Creada De Manera Correcta La Gerencia: ');
        return redirect('/items')->with( 'Fue Creada De Manera Correcta La Gerencia: ');
    }

    public function destroy($item)
    {
        $item1 = Item::find($item);
        $item1->delete();
        return redirect('/items')->with('success', 'Stock has been deleted Successfully');
    }

    public function confirm($id)
    {
        $itemEliminar = Item::findOrFail($id);
        return view('items.confirm', compact('itemEliminar'));
    }

}
