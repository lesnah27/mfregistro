<?php

namespace App\Http\Controllers;

use App\Machine;
use App\Customer;
use App\Contract;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $machines = Machine::all();

        foreach ($customers as $customer) {
            if ($customer->lastContract) {
                $customer->counts = $customer->lastContract->getItemsCountByStatus();
            } else {
                $customer->counts = [
                    0, 0, 0
                ];
            }

        }

        // dd($customers);
        return view('reports.index', compact('customers', 'machines'));
    }

    public function test()
    {
        $c = Contract::find(1);
        dd($c->getItemsCountByStatus());
    }
}
