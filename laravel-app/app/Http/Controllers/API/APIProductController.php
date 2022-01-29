<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class APIProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')
            ->get();

        $categories = Category::all();

        return response()->json([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function addProduct(Request $request)
    {
        $data = $request->validate([
            'categoryID' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);

        $product = new Product();
        $product->category_id = $data['categoryID'];
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();

        return response()->json([
            'product' => $product
        ]);

        // return redirect()->route('vue-app');
    }
}
