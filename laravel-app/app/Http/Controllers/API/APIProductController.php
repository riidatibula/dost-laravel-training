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

    public function search($key){
        $products = Product::with('category')
            ->where('name', 'like', "%$key%")
            ->orWhere('description', 'like', "%$key%")
            ->get();
            

        return response()->json([
            'products' => $products
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
    }

    public function updateProduct(Request $request)
    {
        $data = $request->validate([
            'id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);

        $product = Product::findOrFail($data['id']);
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();

        return response()->json([
            'product' => $product
        ]);
    }

    public function deleteProduct(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|integer',
        ]);

        $product = Product::findOrFail($data['product_id']);
        $product->delete();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
