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
}
