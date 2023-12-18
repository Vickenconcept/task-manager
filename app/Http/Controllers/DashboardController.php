<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    $products = Product::latest()->get();
    $categories = Category::latest()->get();
    $orders = Order::where('status', 'pending')->latest()->get();
    $data = Product::with('category')->latest()->get();
    // dd(count($data));

   

    return view('dashboard', compact('products','categories','orders'));
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
