<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index api
    public function index()
    {
        //get all product
        $products = Product::all();
        //pagination
        // $products = Product::paginate(10);
        return response()->json([
            'status' => 'success',
            'products' => $products,
        ], 200);
    }
}
