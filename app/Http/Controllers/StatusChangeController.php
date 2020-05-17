<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StatusChange;
use App\Item;

class StatusChangeController extends Controller
{
    public function index(Request $request)
    {
        $serial = $request->get('buscarpor');
        $item = Item::where('serial','like',"%$serial%")->paginate(25);
        $changes = StatusChange::all();
        return view('changes.index', compact('changes','item'));
    }

    public function create($id)
    {
        $item = Item::find($id);
        return view('changes.create',compact('item'));
    }

    public function store(Request $request)
    {
        $item = Item::where('serial', $request->serial)->first();

        if (!$item) {
            $notification = 'Ningún equipo coincide con el serial indicado.';
            return back()->with(compact('notification'));
        }

        StatusChange::create([
            'item_id' => $item->id,
            'status' => $request->status
        ]);

        $item->status = $request->status;
        $item->save();

        $notification = 'El cambio de estado se ha registrado correctamente.';
        return redirect('changes')->with(compact('notification'));
    }

}
