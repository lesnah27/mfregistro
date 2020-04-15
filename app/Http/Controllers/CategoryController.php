<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {

        return view('registro_gerencia');
    }

    public function store(Request $request)
    {

        $category = new Category(array(
            'name' => $request->get('name'),
        ));

        $category->save();

        return redirect('/registro_gerencia')->with('status', 'Fue Creada De Manera Correcta La Gerencia: ');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
