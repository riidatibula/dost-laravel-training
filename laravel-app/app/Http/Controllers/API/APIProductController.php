<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class APIProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->get();

        return response()->json([
            'products' => $products
        ]);
    }
}
