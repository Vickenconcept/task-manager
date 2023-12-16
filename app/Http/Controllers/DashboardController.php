<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $products = Product::latest()->get();
    $categories = Category::latest()->get();
    $data = Product::with('category')->latest()->get();
    // dd(count($data));

   

    return view('dashboard', compact('products','categories'));
} 
    public function create()
{
    $categories = Category::latest()->get();
    return view('product.create', compact('categories'));
} 

public function store(Request $request)
{
    $payload = $request->validate([
        'name' => 'required',
        'description' => 'required',
       
    ]);


    Category::create($payload);

    return back()->with('success','created successfully');
}
}
