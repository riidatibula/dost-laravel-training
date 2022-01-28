<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('product-inventory.product.index', [
            'products' => Product::all()
        ]);
    }

    public function showCategory()
    {
        $products = Product::with('category')
            ->get();

        return view('product-inventory.product.show_category', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        return view('product-inventory.product.product_info', [
            'product' => Product::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('product-inventory.product.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);

        $product = new Product();
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();

        return redirect()->route('products');
    }
}