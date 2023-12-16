<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {

        $user = auth()->user();
        $productsInCart = Cart::latest()->get();
        // dd($productsInCart);
     
        return view('cart', compact('productsInCart'));
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'product_name' => 'required',
            'description' => 'sometimes',
            'image' => 'sometimes',
            'price' => 'required',
        ]);

        $user = auth()->user();

        $product = Cart::where('product_name', $payload['product_name'])
            ->where('description', $payload['description'])
            ->first();

        if ($product) {
            // Product already exists
            return redirect('cart');
        } else {
            // Product does not exist, create a new cart
            $user->carts()->create($payload);
            return redirect('cart');
        }
        return;
    }
    public function destroy(Cart $cart){


        $cart->delete();
        return back()->with('success','Deleted Successfully');
    }
}
