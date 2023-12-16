<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('clothe', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $products = Product::latest()->get();
        return view('product.index', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $payload = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'discount' => 'sometimes',
            'quantity' => 'sometimes',
            'image' => 'required',
        ]);


        Product::create($payload);

        return back()->with('success','created successfully');
    }
    public function selectBestSelling(Request $request, Product $product)
    {
        $payload = $request->validate([
            'best_selling' => 'required',
        ]);
        $product->best_selling = $payload['best_selling'];
        $product->update();
        return back()->with('success','Updated Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success','Deleted Successfully');
    }
}
