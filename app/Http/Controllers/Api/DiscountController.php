<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    //index
    public function index()
    {
        $discounts = \App\Models\Discount::all();

        return response()->json([
            'status' => 'Success',
            'data' => $discounts,
        ], 200);
    }

    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'value' => 'required',
        ]);

        //create discount
        $discounts = \App\Models\Discount::create($request->id);

        return response()->json()([
            'status' => 'Success',
            'data' => $discounts,
        ], 200);
    }
}
