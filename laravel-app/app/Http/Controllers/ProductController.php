<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
}