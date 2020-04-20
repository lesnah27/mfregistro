<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Item;
use App\ContractDetail;

class ContractDetailController extends Controller
{
    public function index(Contract $contract)
    {
        return view('contracts.details', compact('contract'));
    }

    public function store(Contract $contract, Request $request)
    {
        // TODO: Verificar que serial sea un campo único
        $item = Item::where('serial', $request->serial)->first();

        if (!$item) {
            $notification = 'No se ha encontrado ningún item con el serial indicado.';
            return back()->with(compact('notification'));
        }

        ContractDetail::create([
            'contract_id' => $contract->id,
            'item_id' => $item->id
        ]);

        $notification = 'Item cargado correctamente.';
        return back()->with(compact('notification'));
    }

    public function destroy(Contract $contract, Request $request)
    {
        ContractDetail::find($request->contract_detail_id)->delete();

        $notification = 'Item eliminado correctamente.';
        return back()->with(compact('notification'));
    }
}
