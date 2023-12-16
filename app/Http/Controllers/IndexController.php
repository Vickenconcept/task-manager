<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('best_selling','1')->latest()->get();
        
        return view('home', compact('products'));
    }
}
