<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    //index
    public function index(Request $request)
    {
        $discounts = Discount::when($request->input('name'), function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->paginate(10);
        return view('pages.discounts.index', compact('discounts'));
    }

    //create
    public function create()
    {
        $discounts = DB::table('discounts')->get();
        return view('pages.discounts.create', compact('discounts'));
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'value' => 'required|numeric',
        ]);


        $discount = new Discount();
        $discount->name = $request->name;
        $discount->description = $request->description;
        $discount->value = $request->value;
        $discount->save();

        return redirect()->route('discounts.index')->with('success', 'Discount created successfully');
    }

    // show
    public function show($id)
    {
        return view('pages.discounts.show');
    }

    // edit
    public function edit($id)
    {
        $discounts = Discount::findOrFail($id);
        return view('pages.discounts.edit', compact('discounts'));
    }

    // update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'value' => 'required|numeric',
        ]);

        $discount = Discount::find($id);
        $discount->name = $request->name;
        $discount->description = $request->description;
        $discount->value = $request->value;
        $discount->save();

        return redirect()->route('discounts.index')->with('success', 'Discounts updated successfully');
    }

    // destroy
    public function destroy($id)
    {
        $product = Discount::find($id);
        $product->delete();

        return redirect()->route('discounts.index')->with('success', 'User delete successfully');
    }
}
