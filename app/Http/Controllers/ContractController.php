<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Customer;

class ContractController extends Controller
{
    public function index()
    {
        $contracts = Contract::all();
        return view('contracts.index', compact('contracts'));
    }

    public function create()
    {
        $customers = Customer::all();
        return view('contracts.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $contract = Contract::create(
            $request->only('customer_id', 'description')
        );

        return redirect('/contracts/'.$contract->id.'/details');
    }

    public function edit()
    {
        return view('contracts.edit');
    }
}
