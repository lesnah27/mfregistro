<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Customer;
use App\Parameter;
use Illuminate\Support\Facades\DB;


class CustomerController1 extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $parameters = Parameter ::all();
         // ddd($parameters);
       return view('customers.index',compact('customers'));
    }

    public function create()
    {
       $category = DB::table('categories')->pluck('name', 'id');
        return view('customers.create',compact('category'));
    }

    public function store(Request $request)
    {
             Customer::create([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),

        ]);

        return redirect('/customers')->with('status', 'Nuevo Cliente Registrado:');


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customers=Customer::findOrFail($id);
        $custoCateg = Category::all();
        return view('customers.edit',compact('customers','custoCateg'));

    }

    public function update(Request $request, $id)
    {
        $customers=Customer::findOrFail($id);
        Customer::create([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),

        ]);

        return redirect('/customers')->with('status', 'Nuevo Cliente Registrado:');
    }

    public function destroy($id)
    {
        //
    }
}
