<?php

namespace App\Http\Controllers;

use App\Machine;
use App\Customer;
use App\Category;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('reports.index', compact('categories'));
    }

    public function byCategory(Category $category)
    {
        $customers = $category->customers;
        $machines = Machine::paginate(25);

        foreach ($customers as $customer)
            $customer->counts = [
                0, 0, 0
            ];

        return view('reports.category', compact('customers', 'machines', 'category'));
    }

    public function general()
    {
        $categories = Category::all();
        $machines = Machine::all();

        return view('reports.general', compact('categories', 'machines'));
    }

    public function test()
    {
        // dd($c->getItemsCountByStatus());
    }


}
