<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Discount;

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
}
