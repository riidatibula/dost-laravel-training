<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('product-inventory.category.index', [
            'categories' => Category::all()
        ]);
    }

    public function showProducts()
    {
        $categories = Category::with('products')
            ->get();

        return view('product-inventory.category.show_products', [
            'categories' => $categories
        ]);
    }

    public function show($id)
    {
        return view('product-inventory.category.category_info', [
            'category' => Category::findOrFail($id)
        ]);
    }

    public function create()
    {
        return view('product-inventory.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string'
        ]);

        $category = new Category();
        $category->name = $data['name'];
        $category->save();

        return redirect()->route('pi-app-home');
    }
}
