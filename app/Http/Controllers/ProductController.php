<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('detail', compact('product'));
    }
}
