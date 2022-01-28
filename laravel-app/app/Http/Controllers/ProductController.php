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

    public function vueapp()
    {
        return view('vueapp');
    }

    public function search(Request $request){
        $key = $request->key;

        $products = Product::with('category')
            ->where('name', 'like', "%{$key}%")
            ->get();

        return view('product-inventory.product.index', [
            'products' => $products
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

    public function confirmDelete($id)
    {
        return view('product-inventory.product.confirm_delete', [
            'product' => Product::findOrFail($id)
        ]);
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products');
    }

    public function edit($id)
    {
        return view('product-inventory.product.edit', [
            'product' => Product::findOrFail($id),
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);

        $product = Product::findOrFail($id);
        $product->category_id = $data['category_id'];
        $product->name = $data['name'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];
        $product->description = $data['description'];
        $product->save();

        return redirect()
            ->route('product-info', ['id' => $product->id]);
    }
}