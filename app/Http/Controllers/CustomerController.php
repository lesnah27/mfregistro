<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Parameter;
use App\Category;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $name = $request->get('buscarpor');
      $customers = Customer::where('name','like',"%$name%")->paginate(25);
      return view('customers.index',compact('customers'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('categories')->pluck('name', 'id');
        return view('customers.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'bail|required|unique:customers|max:255',

        ]);

        Customer::create([
            'name' => $request->get('name'),
            'category_id' => $request->get('category_id'),

        ]);

        return redirect('/clientes')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers=Customer::findOrFail($id);
        $category = DB::table('categories')->pluck('name', 'id');
        return view('customers.edit',compact('customers','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($id);
        $customers=Customer::findOrFail($id);
        $customers->name = $request->get('name');
        $customers->category_id = $request->get('category_id');
        $customers->save();
        return redirect('/clientes')->with('datos','Registro actualizado correctamente!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
