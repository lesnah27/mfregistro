<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\CustomerItem;
use App\Customer;

class CustomerItemController extends Controller
{
    public function index(Customer $customer)
    {
        $items = $customer->items;
        $itemst = Item::all();
       
        return view('contracts.details', compact('customer', 'items','itemst'));
    }

    public function store(Customer $customer, Request $request)
    {
        // TODO: Verificar que serial sea un campo único
        $item = Item::where('serial', $request->serial)->first();

        if (!$item) {
            $notification = 'No se ha encontrado ningún item con el serial indicado.';
            return back()->with(compact('notification'));
        }

        if ($item->customer_id) {
            $notification = 'Este item ya se encuentra asignado al cliente con id ' . $item->customer_id . '. Debe eliminar la asignación para poder asignarlo aquí.';
            return back()->with(compact('notification'));
        }

        $item->customer_id = $customer->id;
        $item->save();

        $notification = 'Item asociado correctamente.';
        return back()->with(compact('notification'));
    }

    public function destroy(Customer $contract, Request $request)
    {
        $item = Item::find($request->item_id);

        $item->customer_id = null;
        $item->save();

        $notification = 'Item eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
